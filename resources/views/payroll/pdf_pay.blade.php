<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <span>{{$company->companyName}}</span>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Empleado</th>
                <th>Salario básico</th>
                <th>Adiciones</th>
                <th>Deducciones</th>
                <th>Horas extras</th>
                <th>Salario neto</th>
            </tr>
        </thead>
        <tbody>
                <tr>
                    <td>{{$payroll->nameEmployee." ".$payroll->lastName}}</td>
                    <td>{{$payroll->salaryEmployee}}</td>
                    <td>{{$payroll->totalAdditions}}</td>
                    <td>{{$payroll->totalDeductions}}</td>
                    <td>{{$payroll->total_Overtimes}}</td>
                    <td>{{$payroll->netPay}}</td>
                </tr>
        </tbody>
    </table>
</body>
</html>
