<?php
namespace App\Http\Traits;

trait ResponseDatagrid
{
    public function datagridResponse($dataArr, $queyData): Array
    {
        return [
            'data' => [
                'content' => $dataArr,
                'number' => $queyData->currentPage() - 1,
                'size' => $queyData->perPage(),
                'first' => $queyData->onFirstPage(),
                'last' => $queyData->lastPage() == $queyData->currentPage() ? true : false,
                'totalPages' => $queyData->lastPage(),
                'numberOfElements' => $queyData->count(),
                'totalElements' => $queyData->total()
            ]
        ];
    }
}
