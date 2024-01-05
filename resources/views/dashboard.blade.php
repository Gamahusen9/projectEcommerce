@extends('layouts.template')

@section('content')
    <div class="div">
        <img loading="lazy" srcset="..." class="img" />
        <div class="div-2"></div>
        <div class="div-3">
            <img loading="lazy"
                src="https://cdn.builder.io/api/v1/image/assets/TEMP/3e7465b2d782a74a2a82bd4336c49f50eff9e2a6ca6ca5710fb6ef22fba5a845?"
                class="img-2" />
            <div class="div-4">Kategori Pilihan</div>
            <div class="div-5">
                <img loading="lazy" srcset="..." class="img-3" />
                <div class="div-6"></div>
                <div class="div-7"></div>
                <div class="div-8"></div>
                <div class="div-9"></div>
                <div class="div-10"></div>
            </div>
            <div class="div-11">
                <div class="div-12">
                    <img loading="lazy" srcset="..." class="img-4" />
                    <div class="div-13">MACKBOOK</div>
                </div>
                <div class="div-14">
                    <img loading="lazy" srcset="..." class="img-5" />
                    <div class="div-15">ROG</div>
                </div>
                <div class="div-16">
                    <img loading="lazy" srcset="..." class="img-6" />
                    <div class="div-17">ACER</div>
                </div>
                <div class="div-18">
                    <img loading="lazy" srcset="..." class="img-7" />
                    <div class="div-19">HP</div>
                </div>
                <div class="div-20">
                    <img loading="lazy" srcset="..." class="img-8" />
                    <div class="div-21">LENOVO</div>
                </div>
                <div class="div-22">
                    <img loading="lazy" srcset="..." class="img-9" />
                    <div class="div-23">MSI</div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .div {
            display: flex;
            flex-direction: column;
            padding-bottom: 50px;
            border-radius: 50px;
        }

        .img {
            aspect-ratio: 3.51;
            object-fit: contain;
            object-position: center;
            width: 100%;
            border-radius: 15px;
            overflow: hidden;
        }

        .div-2 {
            background-color: #4477ce;
            width: 989px;
            max-width: 100%;
            height: 6px;
            margin: 13px 28px 0;
        }

        .div-3 {
            disply: flex;
            flex-direction: column;
            fill: #0c134f;
            overflow: hidden;
            position: relative;
            display: flex;
            min-height: 300px;
            margin: 11px 25px 0;
            padding: 28px 36px 28px 31px;
            border-radius: 10px;
        }

        .img-2 {
            position: absolute;
            inset: 0;
            height: 100%;
            width: 100%;
            object-fit: cover;
            object-position: center;
        }

        .div-4 {
            position: relative;
            color: #fff;
            font: 600 15px Inter, sans-serif;
        }

        .div-5 {
            position: relative;
            display: flex;
            margin-top: 28px;
            padding-right: 12px;
            justify-content: space-between;
            gap: 20px;
        }

        .img-3 {
            aspect-ratio: 1.25;
            object-fit: contain;
            object-position: center;
            width: 128px;
            overflow: hidden;
            max-width: 100%;
        }

        .div-6 {
            border-radius: 15px;
            background-color: rgba(133, 133, 133, 0.24);
            display: flex;
            width: 126px;
            height: 102px;
            flex-direction: column;
        }

        .div-7 {
            border-radius: 15px;
            background-color: rgba(133, 133, 133, 0.24);
            display: flex;
            width: 126px;
            height: 102px;
            flex-direction: column;
        }

        .div-8 {
            border-radius: 15px;
            background-color: rgba(133, 133, 133, 0.24);
            display: flex;
            width: 125px;
            height: 102px;
            flex-direction: column;
        }

        .div-9 {
            border-radius: 15px;
            background-color: rgba(133, 133, 133, 0.24);
            display: flex;
            width: 126px;
            height: 102px;
            flex-direction: column;
        }

        .div-10 {
            border-radius: 15px;
            background-color: rgba(133, 133, 133, 0.24);
            display: flex;
            width: 126px;
            height: 102px;
            flex-direction: column;
        }

        .div-11 {
            position: relative;
            display: flex;
            margin-top: 57px;
            padding-right: 18px;
            justify-content: space-between;
            gap: 20px;
        }

        .div-12 {
            border-radius: 15px;
            background-color: rgba(133, 133, 133, 0.24);
            display: flex;
            justify-content: space-between;
            gap: 0px;
            padding: 4px 5px;
        }

        .img-4 {
            aspect-ratio: 0.91;
            object-fit: contain;
            object-position: center;
            width: 30px;
            overflow: hidden;
            max-width: 100%;
        }

        .div-13 {
            color: #fff;
            align-self: center;
            flex-grow: 1;
            white-space: nowrap;
            margin: auto 0;
            font: 600 15px Inter, sans-serif;
        }

        .div-14 {
            border-radius: 15px;
            background-color: rgba(133, 133, 133, 0.24);
            display: flex;
            justify-content: space-between;
            gap: 5px;
            padding: 6px 37px 0 3px;
        }

        .img-5 {
            aspect-ratio: 1.66;
            object-fit: contain;
            object-position: center;
            width: 58px;
            overflow: hidden;
            max-width: 100%;
        }

        .div-15 {
            color: #fff;
            align-self: center;
            flex-grow: 1;
            white-space: nowrap;
            margin: auto 0;
            font: 600 15px Inter, sans-serif;
        }

        .div-16 {
            border-radius: 15px;
            background-color: rgba(133, 133, 133, 0.24);
            display: flex;
            justify-content: space-between;
            gap: 3px;
            padding: 8px 7px;
        }

        .img-6 {
            aspect-ratio: 2.16;
            object-fit: contain;
            object-position: center;
            width: 54px;
            overflow: hidden;
            max-width: 100%;
        }

        .div-17 {
            color: #fff;
            align-self: center;
            flex-grow: 1;
            white-space: nowrap;
            margin: auto 0;
            font: 600 15px Inter, sans-serif;
        }

        .div-18 {
            border-radius: 15px;
            box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
            background-color: rgba(133, 133, 133, 0.24);
            display: flex;
            justify-content: space-between;
            gap: 6px;
            padding: 1px 60px 1px 4px;
        }

        .img-7 {
            aspect-ratio: 1.18;
            object-fit: contain;
            object-position: center;
            width: 46px;
            overflow: hidden;
            max-width: 100%;
        }

        .div-19 {
            color: #fff;
            align-self: center;
            flex-grow: 1;
            white-space: nowrap;
            margin: auto 0;
            font: 600 15px Inter, sans-serif;
        }

        .div-20 {
            border-radius: 15px;
            box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
            background-color: rgba(133, 133, 133, 0.24);
            display: flex;
            justify-content: space-between;
            gap: 4px;
            padding: 3px 13px 3px 3px;
        }

        .img-8 {
            aspect-ratio: 1.36;
            object-fit: contain;
            object-position: center;
            width: 49px;
            overflow: hidden;
            max-width: 100%;
        }

        .div-21 {
            color: #fff;
            align-self: center;
            flex-grow: 1;
            white-space: nowrap;
            margin: auto 0;
            font: 600 15px Inter, sans-serif;
        }

        .div-22 {
            border-radius: 15px;
            box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
            background-color: rgba(133, 133, 133, 0.24);
            display: flex;
            justify-content: space-between;
            gap: 2px;
            padding: 5px 7px;
        }

        .img-9 {
            aspect-ratio: 1.41;
            object-fit: contain;
            object-position: center;
            width: 45px;
            overflow: hidden;
            max-width: 100%;
        }

        .div-23 {
            color: #fff;
            align-self: center;
            flex-grow: 1;
            white-space: nowrap;
            margin: auto 0;
            font: 600 15px Inter, sans-serif;
        }
    </style>
@endsection
