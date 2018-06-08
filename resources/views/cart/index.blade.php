@extends('layouts.app')

@section('title') Cart Page @endsection

@section('content')
    <div class="container">
        <table id="cart" class="table table-hover table-condensed">
            <thead>
            <tr>
                <th style="width:50%">Product</th>
                <th style="width:10%">Price</th>
                <th style="width:8%">Quantity</th>
                <th style="width:22%" class="text-center">Subtotal</th>
                <th style="width:10%"></th>
            </tr>
            </thead>
            <tbody>
                <?php $totalAmount = 0; ?>
                <?php foreach(Cart::content() as $row): ?>
                    <tr>
                        <td data-th="Product">
                            <div class="row">
                                <div class="col-sm-2 hidden-xs">
                                    <img src="{{ url('uploads/product/'.$row->options->thumbnail) }}" alt="" class="img-responsive"/>
                                </div>
                                <div class="col-sm-10">
                                    <h4 class="nomargin"><?php echo $row->name; ?></h4>
                                </div>
                            </div>
                        </td>
                        <td data-th="Price"><?php echo number_format($row->price); ?></td>
                        <td data-th="Quantity">
                            <input type="number" class="form-control text-center" value="<?php echo $row->qty; ?>">
                        </td>
                        <td data-th="Subtotal" class="text-center">
                            <?php
                                $m = $row->price * $row->qty;
                                $totalAmount += $m;
                                echo number_format($m);
                            ?>
                        </td>
                        <td class="actions" data-th="">
                            <button class="btn btn-info btn-sm"><i class="fa fa-refresh"></i></button>
                            <button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>
                        </td>
                    </tr>
                <?php endforeach;?>
            </tbody>
            <tfoot>
            <tr class="visible-xs">
                <td class="text-center"><strong>Total {{ number_format($totalAmount) }}</strong></td>
            </tr>
            <tr>
                <td><a href="#" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
                <td colspan="2" class="hidden-xs"></td>
                <td class="hidden-xs text-center"><strong>Total {{ number_format($totalAmount) }} VND</strong></td>
                <td><a href="#" class="btn btn-success btn-block">Checkout <i class="fa fa-angle-right"></i></a></td>
            </tr>
            </tfoot>
        </table>
    </div>
@endsection