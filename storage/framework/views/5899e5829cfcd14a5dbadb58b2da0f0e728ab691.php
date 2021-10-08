<html>
<head>
    <style>

    </style>
</head>
<body>
    <h2>Domain Search</h2>
    <form method="post" action="/find_domain" class="dashboard-search" id="dashboard-search">
        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
        <div class="input-group main-input-group" data-original-title="" title="">
        
            <input autocomplete="off" class="form-control" id="domain-field" placeholder="company.com" required="required" tabindex="20" type="text" name="domain">
            <span class="input-group-btn">
                <button class="btn-white" data-loading="none" id="search-btn" tabindex="21" type="submit" style="width: 82px;">Search</button>
            </span>    
        </div>
    </form>
    <?php foreach($contracts as $item): ?>
        <div><?php echo e($item-> email_address); ?></div>
    <?php endforeach; ?>
</body>
</html>