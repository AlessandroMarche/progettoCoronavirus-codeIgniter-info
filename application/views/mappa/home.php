<link rel="stylesheet" href="<?= base_url('map.css') ?>" />
<div id="container">
    <div id="sidebar">
        <div class="sidebar-wrapper">
            <div id="features" class="panel panel-default">
                <div class="panel-heading">
                    <div class="row justify-content-center">
                        <ul class="list-group">
                            <li class="list-group-item"><button type="button" class="btn btn-outline-primary" onclick="regionale()">Regionale</button></li>
                            <li class="list-group-item"><button type="button" class="btn btn-outline-primary" onclick="provinciale()">Provinciale</button></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="map"></div>
</div>
<script src="<?= base_url('map.js') ?>"></script>