@extends('admin.layout.layout')

@section('content')
    <div class="content-page">
        <div class="container-fluid add-form-list">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="container mt-5">
                                <h1 class="mb-4">Drag and Drop List</h1>
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <div> <span class="up"></span><span class="down"></span> </div>
                                        Item 1
                                    </li>
                                    <li class="list-group-item">
                                        <div> <span class="up"></span><span class="down"></span> </div>
                                        Item 2
                                    </li>
                                    <li class="list-group-item">
                                        <div> <span class="up"></span><span class="down"></span> </div>
                                        Item 3
                                    </li>
                                    <li class="list-group-item">
                                        <div> <span class="up"></span><span class="down"></span> </div>
                                        Item 4
                                    </li>
                                    <li class="list-group-item">
                                        <div> <span class="up"></span><span class="down"></span> </div>
                                        Item 5
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('styles')
    <style>
        h1 {
            font-size: 2em;
        }

        ul {
            padding: 0;
            margin: 0 auto;
            width: 80%;
            list-style-type: none;
        }

        ul li {
            cursor: move;
            margin: 0 3px 3px 3px;
            padding: 0.3em;

            font-size: 1.25em;
            height: 1em;

            border: 1px solid #670a0a;
            background: #e6e6e6;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        ul div {
            font-family: FontAwesome;
            font-size: 0.5em;
            letter-spacing: 10px;
            width: 10px;
        }

        ul .up,
        ul .down {
            float: left;
            cursor: pointer;
        }

        ul .up:before {
            content: "\f077";
        }

        ul .down:before {
            content: "\f078";
        }
    </style>
@endsection

@section('script')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script>
        $(document).ready(function() {
            $("ul.list-group").sortable();
        });
    </script>
@endsection
