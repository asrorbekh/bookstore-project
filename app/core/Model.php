<?php


class Model
{
    public static function sql(array $data = null): ?array
    {

        if ($data) {
            $params = [];

            $sql = "SELECT ";

            if (array_key_exists('columns', $data) && is_array($data['columns']) && count($data['columns'])) {
                $sql .= join(',', $data['columns']);
            } else {
                $sql .= ' * ';
            }

            if (array_key_exists('table', $data)) {
                $sql .= " FROM  " . $data['table'];
            }

            if (array_key_exists('inner', $data) && is_array($data['inner'])) {
                foreach ($data['inner'] as $join => $on) {
                    $sql .= " INNER JOIN  " . $join . ' ON ' . $on;
                }
            }

            if (array_key_exists('left', $data) && is_array($data['left'])) {
                foreach ($data['left'] as $join => $on) {
                    $sql .= " LEFT JOIN  " . $join . ' ON ' . $on;
                }
            }

            if (array_key_exists('right', $data) && is_array($data['right'])) {
                foreach ($data['right'] as $join => $on) {
                    $sql .= " RIGHT JOIN  " . $join . ' ON ' . $on;
                }
            }

            $sql .= " WHERE " . $data['table'] . ".id > 0 ";

            if (array_key_exists('where', $data) && is_array($data['where']) && count($data['where'])) {
                foreach ($data['where'] as $column => $param) {

                    if ($column == 'search' && is_array($param)) {
                        $sql .= " AND (";

                        $total_param = count($param);
                        $i = 0;
                        foreach ($param as $key => $value) {
                            $index = str_replace('.', '_', $key);
                            $sql .= $key . " LIKE :" . $index;
                            if (++$i != $total_param) {
                                $sql .= " OR ";
                            }
                            $params[':' . $index] = '%' . $value . '%';
                        }
                        $sql .= " )";
                    } else if ($column == 'implode') {

                        $sql .= " AND " . $data['table'] . ".id IN (" . $param . ")";
                    } else if ($column == 'or' && is_array($param)) {
                        $sql .= " AND (";
                        $total_param = count($param);
                        $i = 0;
                        foreach ($param as $key => $value) {
                            $index = str_replace('.', '_', $key);
                            $sql .= $key . " = :" . $index;
                            if (++$i != $total_param) {
                                $sql .= " OR ";
                            }
                            $params[':' . $index] = $value;
                        }
                        $sql .= " )";
                    } else if ($column == 'livesearch' && is_array($param)) {
                        $sql .= " AND (";
                        $total_param = count($param);
                        $i = 0;
                        foreach ($param as $key => $value) {
                            $index = str_replace('.', '_', $key);
                            $sql .= $key . " LIKE '%" . $value . "%'";

                            if (++$i != $total_param) {
                                $sql .= " OR ";
                            }
                            //$params[':'.$index] = '%'.$value.'%';
                        }
                        $sql .= " )";
                    } else if ($column == 'autocomplete' && is_array($param)) {
                        $sql .= " AND (";

                        $total_param = count($param);
                        $i = 0;

                        foreach ($param as $key => $value) {
                            $index = str_replace('.', '_', $key);
                            $sql .= $key . " LIKE :" . $index;

                            if (++$i != $total_param) {
                                $sql .= " OR ";
                            }

                            $params[':' . $index] = $value . '%';
                        }

                        $sql .= " )";
                    } else if ($param === 'available') {
                        $sql .= " AND " . $column . " > 0";
                    } else if ($column === 'min_quantity') {
                        $index = str_replace('.', '_', $column);
                        $sql .= " AND quantity > :" . $index;
                        $params[':' . $index] = $param;
                    } else if ($column === 'available') {
                        $sql .= " AND " . $data['table'] . ".status_id > 0";
                    } else {
                        $index = str_replace('.', '_', $column);

                        if (is_array($param) && count($param)) {
                            $sql .= " AND " . $column . " IN (" . implode(',', $param) . ")";
                        } else {
                            $sql .= " AND " . $column . " = :" . $index;
                            $params[':' . $index] = $param;
                        }
                    }
                }
            }

            if (array_key_exists('group', $data) && $data['group']) {
                $sql .= ' GROUP BY ' . $data['group'];
            }

            if (array_key_exists('order', $data) && $data['order']) {
                $sql .= $data['order'];
            }

            if (array_key_exists('limit', $data)) {
                $sql .= " LIMIT " . $data['limit'];
            }

            $response = array(
                'sql' => $sql,
                'params' => $params
            );

            if (array_key_exists('limit', $data) && $data['limit'] === 1) {
                $response['record'] = true;
            }

            return $response;
        }

        return null;
    }

    public static function get(array $data): ?array
    {
        $response = null;

        if ($data) {

            if (!$response) {
                $data = self::sql($data);


                $database = Database::get()->connect();

                if ($database && is_object($database)) {
                    try {
                        $query = $database->prepare($data['sql']);
                        $query->execute($data['params']);

                        if (array_key_exists('record', $data)) {
                            $response = $query->fetch();
                        } else {
                            $response = $query->fetchAll();
                        }

                    } catch (Exception $e) {
                        Debug::get($e);
                    }
                } else {
                    Debug::get();
                }
            }
        }
        return $response;
    }

    public static function insert(string $sql, array $params): bool|int
    {

        $database = Database::get()->connect();

        if ($database && is_object($database)) {

            try {

                $query = $database->prepare($sql);
                $query->execute($params);

                if ($query->rowCount()) {
                    return (int)$database->lastInsertId();
                }

            } catch (Exception $e) {
                Debug::get($e);
            }
        } else {
            return false;
        }

        return false;
    }

    public static function update(string $sql, array $params): bool
    {
        $response = false;

        if ($sql && $params) {
            $database = Database::get()->connect();

            if ($database && is_object($database)) {

                try {
                    $query = $database->prepare($sql);
                    $query->execute($params);

                    $response = $query->rowCount();

                } catch (Exception $e) {
                    Debug::get($e);
                }
            } else {
                Debug::get();
            }
        }
        return $response;
    }
}

$a = new Database();
