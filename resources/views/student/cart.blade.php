<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="container">
        <div class="mt-4 row">
            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                <div class="invoice-sp">
                    <table class="table table-hover">
                        <thead class="bg-info">
                        <tr>
                            <th>Order Number</th>
                            <th>Item</th>
                            <th>Unit Price</th>
                            <th>Total</th>
                            <th>Pay</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>Crusal Damperal</td>
                            <td>$500</td>
                            <td>$3000</td>
                            <td>
                                <button class="btn btn-default notika-btn-default">Pay</button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
