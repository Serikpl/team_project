<?php include ROOT.'/Views/Admin/adminheader.php'; ?>

<div class="adminContent">
    <div class="container">
        <div class="admin-category">
            <h1>Statystyka</h1>
            <div class="content-wrapper">
                <div class="product_list statistics">
                    <div class="stat_1">
                        <canvas id="myChart"></canvas>
                    </div>
                    <div class="stat_2">
                        <canvas id="myChart_2"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="/assets/js/jquery-1.11.0.min.js?ver=1"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>
<!-- AJAX here -->
<script>
    $(document).ready(function() {
        $.post('/ad/stat/stat_2/', {}, function(data) {
            var stat_ = JSON.parse(data);

            var order = [];
            var quant = [];
            for (i = 0; i < stat_.length; i++) {
                quant[i] = stat_[i].quantity;
                order[i] = stat_[i].brand_name;
            }

            var ctx = document.getElementById("myChart_2").getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: order,
                    datasets: [{
                        label: 'Number of Available Bike By Brand',
                        data: quant,
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255,99,132,1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)'
                        ],
                        borderWidth: 1
                    }]
                }
            });


        });

        // $('#btn_stat').click(function() {
        $.post('/ad/stat/amounts/', {}, function(data) {
            var stat = JSON.parse(data);
            var id = [];
            var amount = [];
            for (i = 0; i < stat.length; i++) {
                id[i] = stat[i].id_order;
                amount[i] = stat[i].amount;
            }

            var ctx = document.getElementById("myChart").getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: id,
                    datasets: [{
                        label: 'amount paid per one transaction',
                        data: amount,
                        backgroundColor: [

                            'rgba(54, 162, 235, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255,99,132,1)'
                        ],
                        borderWidth: 1
                    }]
                }

            });
        });

        return false;

    });

</script>

</body>

</html>
