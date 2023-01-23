<?php

namespace App\DataTables;

use App\Models\Address;
use App\Models\User;
use App\Repositories\RoleRepository;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class AddressChangeDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->addColumn('action', 'dashboard.page.user.address.btn.btn')
            ->editColumn('block_id', function ($row) {
                return  $row->block->name ?? '-';
            })
            ->editColumn('area_id', function ($row) {
                return  $row->area->name ?? '-';
            })
            ->addColumn('streetName', function ($row) {
                return $row->address['street_name'] ?? '-';
            })
            ->addColumn('building_no', function ($row) {
                return $row->address['building_no'] ?? '-';
            })
            ->addColumn('default_address', function ($row) {
                if (!$address = $row->user->main_address()) {
                    return '-';
                }
                return  ($address->area->name ?? ' ') .','.($address->block->name ?? ' ') . '<br/>' .
                        ($address->address['building_no'] ?? ' ').','. ($address->address['street_name'] ?? ' ') ;
            })
            ->addIndexColumn()

            ->rawColumns([
                'action',
                'building_no',
                'streetName',
                'default_address'
            ]);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\StaffUser $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Address $model)
    {
        return $model->with('area', 'block', 'user')->where('default_requested', true)->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->setTableId('staffusers-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->dom('Bfrtip')
            ->orderBy(1)
            ->parameters([
                'dom' => 'Blfrtip',
                'lengthMenu' => [[10, 25, 50, 100, 250, -1], [10, 25, 50, 100, 250, 'الكل']],
            ]);;
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [

            Column::make('id')->data('DT_RowIndex')->title('SI NO'),
            Column::make('user_id')->data('user.first_name.en')->title('اسـم العميـل	'),
            Column::make('area_id')->title(' المنطقة'),
            Column::make('block_id')->title(' القطعه'),
            Column::make('streetName')->title('اسم الشارع	'),
            Column::make('building_no')->title('رقم المبني	 '),
            Column::make('default_address')->title('العنوان الافتراضي '),
            Column::make('action')->title('')->searchable(false)->orderable(false),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'StaffUsers_' . date('YmdHis');
    }
}