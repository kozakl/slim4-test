<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
require_once '../src/utils/convertTypes.php';
require_once '../src/utils/normalize.php';
require_once '../src/utils/quote.php';
require_once '../src/utils/sql.php';

return function(Request $request, Response $response) {
    $response->getBody()->write('Hello wosrld!ddd');
        return $response;
        
   /* $sql = prepare('
        select :fields
        from
            events
        where
          (:deleted is null or deleted = :deleted) and
          (:dateFrom is null or date >= :dateFrom) and
          (:dateTo is null or date <= :dateTo)
        order by
            case when :sortType = "asc" then
                :sort end asc,
            case when :sortType = "desc" then
                :sort end desc
    ', [
        ':fields' => $request->getParam('fields') ?: '*',
        ':deleted' => $request->getParam('deleted') ?: 'false',
        ':dateFrom' => quote($request->getParam('dateFrom')),
        ':dateTo' => quote($request->getParam('dateTo')),
        ':sortType' => quote($request->getParam('sortType')),
        ':sort' => $request->getParam('sort') ?: 'id'
    ]);
    
    try {
        $events = convertTypes(
            $this->schemas->events,
            $this->db
                ->query($sql)
                ->fetchAll(PDO::FETCH_ASSOC)
        );
    } catch(PDOException $exception) {
        echo json_encode([
            'error' => $exception->getMessage()
        ]);
        exit;
    }
    if ($request->getParam('normalize')) {
        return $response
            ->withHeader('Access-Control-Allow-Origin', '*')
            ->withJson(normalize($events));
    } else {
        return $response
            ->withHeader('Access-Control-Allow-Origin', '*')
            ->withJson($events);
    }*/
};
