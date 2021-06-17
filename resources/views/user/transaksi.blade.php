@extends('template.header')

@section('style-tambahan')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=DM+Sans&display=swap');

        body {
            font-family: 'DM Sans', sans-serif;
            background-color: #fcfcfc;
        }

        .nav-link {
            color: #14416b;
            font-size: 20px;
        }

        .navbar {
            background-color: #fff;
            box-shadow: 6px 6px 16px 4px rgba(155, 152, 152, 0.15);
        }

        .signUp {
            background-color: #f88d32;
            border: none;
            padding: 8px 16px;
            border-radius: 12px;
            font-size: 20px;
        }

        .list-trans {
            display: flex;
            flex-direction: column;
            gap: 5px;
        }

        .satuan-trans {
            display: flex;
            flex-direction: row;
            gap: 20px;
            padding: 10px;
            border: 1px solid black;
            align-items: center
        }

    </style>

@endsection

@section('title', 'Transaksi')

@section('content')
    <div class="container my-4">

        <h2>Halo, ini page transaksi</h2>

        <div class="list-trans">

            @foreach ($trans as $item)
                <div class="satuan-trans">
                    <span>
                        tanggal trans :: {{ $item->created_at }}
                    </span>
                    <span>
                        total barang :: {{ $item->totalBarang }}
                    </span>
                    <span>
                        total uang :: <span class="money">{{ $item->totalHarga }}</span>
                    </span>
                    <a href="#" class="btn btn-primary">Show Details</a>
                </div>

            @endforeach
        </div>
    </div>

@endsection

@section('js')
    <script>
        const money = document.querySelectorAll('.money');
        money.forEach(m => {

            let var2 = m.innerHTML.split('.')[0];
            console.log(var2);
            let string = [];
            counter = 0;
            for (let i = var2.length; i >= 0; i--) {

                string.unshift(var2[i])
                if (counter % 3 == 0) {
                    string.unshift('.')
                }
                counter++;
            }

            console.log(string.join(''));
            m.innerHTML = 'Rp ' + string.join('');
        });

    </script>
@endsection
