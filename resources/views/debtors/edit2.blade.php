<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
            <title>
                Edit Late Payor
            </title>
            <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
                <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
                    <style>
                        *{
            font-family: arial;
        }
                    </style>
                </link>
            </link>
        </meta>
    </head>
    <body>
        <div class="container mt-4">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="text-center">
                        <h2>
                            <b>
                                Edit Late Payor
                            </b>
                        </h2>
                    </div>
                    <div class="text-right">
                        <a class="btn btn-info" enctype="multipart/form-data" href="{{ route('debtors.index2') }}">
                            <i class="fa-solid fa-arrow-left fa-beat" style="color: #ffffff;">
                            </i>
                        </a>
                    </div>
                </div>
            </div>
            @if(session('status'))
            <div class="alert alert-success mb-1 mt-1">
                {{ session('status') }}
            </div>
            @endif
            <form action="{{ route('debtors.update',$pay->Borrower ID) }}" enctype="multipart/form-data" method="POST">
                @csrf
            @method('PUT')
                <div class="col-xs-12 col-sm-12 col-md-4 mx-auto">
                    <div class="row mt-2">
                        <div class="col-xs-12 col-sm-12 col-md-12 mx-auto">
                            <div class="form-group">
                                <strong>
                                    Borrower Name
                                </strong>
                                <input class="form-control" name=" Borrower Name" type="text" value="{{ $pay->Borrower Name }}">
                                    @error(' Borrower Name')
                                    <div class="alert alert-danger mt-1 mb-1">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </input>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-15">
                            <div class="form-group">
                                <strong>
                                    Date of Transaction
                                </strong>
                                <input class="form-control" name="Date of Transaction" type="date" value="{{ $pay->Date of Transaction }}">
                                    @error('Date of Transaction')
                                    <div class="alert alert-danger mt-1 mb-1">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </input>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>
                                    Amount of Money Borrowed
                                </strong>
                                <input class="form-control" name="Amount of Money Borrowed" type="integer" value="{{ $pay->Amount of Money Borrowed }}">
                                    @error('Amount of Money Borrowed')
                                    <div class="alert alert-danger mt-1 mb-1">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </input>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>
                                    Remarks
                                </strong>
                                <input class="form-control" name="Remarks" type="text" value="{{ $pay->Remarks }}">
                                    @error('Remarks')
                                    <div class="alert alert-danger mt-1 mb-1">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </input>
                            </div>
                        </div>
                        <button class="btn mx-auto btn-primary" type="submit">
                            Submit
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>