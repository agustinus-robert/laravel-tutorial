<div>
    <div class="container" style="width:800px; height:400px;">
        <table class="table text-center">
            <thead>
                <tr>
                    <th>Id User</th>
                    <th>Nama User</th>
                </tr>
            </thead>
            
            <tbody>
                <?php foreach($data_user as $k => $v){ ?>
                    <tr>
                        <td>{{$v['id']}}</td>
                        <td>{{$v['nama']}}</td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
