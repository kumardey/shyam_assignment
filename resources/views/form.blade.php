<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <title>Document</title>
    <style>
        .scrollable-container {
            max-height: 600px; /* Set your desired height */
            overflow-y: auto;
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <h2>Form Data</h2>
    <div class="scrollable-container">
        <table class="table">
            <thead>
            <tr>
                <th><a href="#" class="sort" data-column="id">ID</a></th>
                <th><a href="#" class="sort" data-column="name">Name</a></th>
                <th>Image</th>
                <th>Address</th>
                <th>Gender</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody id="data-container"></tbody>
        </table>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        var sortColumn = 'id';
        var data = []; // Define the data variable globally

        fetchData();

        function fetchData() {
            $.ajax({
                url: '/fetch-data',
                method: 'GET',
                success: function (res) {
                    data=res;
                    displayData(res);
                },
                error: function () {
                    alert('Error fetching data');
                }
            });
        }

        function displayData(data) {
            $('#data-container').empty();

            data.forEach(function (item) {
                console.log(item.image);
                var row = '<tr>' +
                    '<td>' + item.id + '</td>' +
                    '<td>' + item.name + '</td>' +
                    '<td><img src="' + item.image + '" alt="Image" style="width: 50px;"></td>' +
                    '<td>' + item.address + '</td>' +
                    '<td>' + item.gender + '</td>' +
                    '<td>' +
                    '<button class="btn btn-primary">Edit</button>' +
                    '<button class="btn btn-danger ml-1">Delete</button>' +
                    '<button class="btn btn-secondary ml-1">View</button>' +
                    '</td>' +
                    '</tr>';

                $('#data-container').append(row);
            });
        }
        
        function sortData(data, column) {
            data.sort(function (a, b) {
                var aValue = a[column];
                var bValue = b[column];
                
                if (typeof aValue === 'string') {
                    aValue = aValue.toLowerCase();
                }
                if (typeof bValue === 'string') {
                    bValue = bValue.toLowerCase();
                }

                if (column === 'id') {
                    return aValue - bValue;
                } else {
                    return aValue.localeCompare(bValue);
                }
            });
        }

        $('.sort').click(function (e) {
            e.preventDefault();
            var column = $(this).data('column');
            if (sortColumn === column) {
                // Toggle sorting order if the same column is clicked again
                data.reverse();
            } else {
                sortColumn = column;
                sortData(data, sortColumn);
            }
            displayData(data);
        });        
    });
</script>

</body>
</html>