@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Bienvenue</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Texts
                </div>
            </div>
        </div>

        <div class="row">
             <div class="col-md-12">

                <div id="temps_div"></div>
                
                
<?php

$temperatures = Lava::DataTable();

$temperatures->addDateColumn('Date')
             //->addNumberColumn('Max Temp')
             //->addNumberColumn('Mean Temp')
             ->addNumberColumn('Temp.');

             foreach ($datas as $data) {
                $temperatures->addRow(array(
                    $data->recorded_at,
                    $data->data
            ));
             }

 /*           ->addRow(['2014-10-1',  67, 65, 62])
             ->addRow(['2014-10-2',  68, 65, 61])
             ->addRow(['2014-10-18', 63, 62, 62]);*/

Lava::LineChart('Temps', $temperatures, [
    'title' => 'Température hotpot',
    'height' => 500
]);


// With Lava class alias
echo Lava::render('LineChart', 'Temps', 'temps_div') 

?>

            </div>
        </div>

    </div>
</div>
@endsection
