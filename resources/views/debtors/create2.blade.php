<head>
    <meta charset="UTF-8">
    <title>Add Student</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        *{
            font-family: arial;
        }
    </style>
</head>

<body>
    
    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="text-center">
                    <h2><b>Register Late Payor</b></h2>
                </div>
                <div class="text-right ">
                    <a class="btn btn-info" href="{{ route('debtors.index2') }}"> <i class="fa-solid fa-arrow-left fa-beat" style="color: #ffffff;"></i></a>
                </div>
            </div>
        </div>
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('debtors.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="col-xs-12 col-sm-12 col-md-4 mx-auto">
            <div class="row mt-2">
                <div class="col-xs-12 col-sm-12 col-md-12 mx-auto">
                    <div class="form-group">
                        <strong>Borrowers Name</strong>
                        <input type="text" name="BorrowersName" class="form-control" >
                        @error('BorrowersName')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-15">
                    <div class="form-group">
                        <strong>Date of Transaction</strong>
                        <input type="date" name="Date_of_Transaction" class="form-control" >
                        @error('Date_of_Transaction')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Amount of Money Borrowed</strong>
                        <input type="integer" name="Amount_of_Money_Borrowed" class="form-control" >
                        @error(Amount_of_Money_Borrowed')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Remarks</strong>
                        <input type="text" name="Remarks" class="form-control" >
                        @error('Remarks')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn  mx-auto btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
</body>

</html>