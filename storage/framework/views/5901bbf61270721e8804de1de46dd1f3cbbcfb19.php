
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="<?php echo e(asset('new-assets/js/filterpage/jquery.min.js')); ?>"></script>
    <style>
        body {
            display: flex;
            justify-content: center;
        }
        .wrapper {
            margin-top: 100;
            margin-left: 60;
            width: 80%;
        }
        .smallFont {
            font-size: 12px;
            color: #555;
        }
        .normalFont {
            font-size: 15px;
            color: #333;
        }
        .sepa {
            height: 20px;
        }
        .dashline {
            border: 1px solid grey;
            width: 100%;
            height: 0;
            margin-top: 20;
            margin-bottom: 20;
        }
        .normalButton {
            background-color: white;
            border: 1px solid #3253c1;
            color: #3253c1;
            padding: 10px;
            cursor: pointer;
            transition: all 0.3s ease-out;
            border-radius: 5px;
        }
        .redButton {
            background-color: white;
            border: 1px solid #f78713;
            color: #f78713;
            padding: 10px;
            cursor: pointer;
            transition: all 0.3s ease-out;
            border-radius: 5px;
        }
        
        .greenButton {
            background-color: #37ca68;
            color: white;
            padding: 6px;
            cursor: pointer;
            transition: all 0.3s ease-out;
            border-radius: 5px;
            font-size: 12px;
        }
        
        .normalButton:hover {
            background-color: #3253c1;
            color: white;
        }
        .redButton:hover {
            background-color: #f78713;
            color: white;
        }
        .card {
            width: 28%;
            box-shadow: 0px 0px 1px 1px rgba(128, 128, 128, 0.2);
            padding: 10px;
            margin-top: 10px;
        }
        .card-name {
            color: #3253c1;
            font-size: 18px;
            font-weight: 600
        }
        .card-job {
            margin-top: 5px;
            font-size: 15px;
            color: #333
        }
        .card-email {
            margin-top: 7px;
            border-radius: 8px;
            padding: 4px;
            font-size: 15px;
            border: 1px solid #ccc;
            max-width: 300px;
            color: #333;
        }
        .card-phone {
            padding: 4px;
            font-size: 14px;
            color: #317fce
        }
        .input-wrapper {
            width: calc(100% + 8px);
            margin: 0 -4px;
            border: 1px solid #d2d2d2;
            box-shadow: 0 1px 3px rgb(0 0 0 / 6%);
            border-radius: 3px;
            transition: all 150ms ease;
            height: 52px;
            z-index: 1;
        }
        .search-input {
            background: #fefefe;
            padding: 15px 14px;
            font-size: 15px;
            height: 50px;
            border: 0;
            border-radius: 3px;
            transition: all 250ms ease;
            min-width: 300px;
        }
        .heading {
            font-size: 20px;
            margin: 0 0 25px;
            font-weight: 600;
            line-height: 1.5em;
            font-family: inherit;
            color: #333;
        }
        .container {
            padding: 20px 10px;
            border: 1px solid grey;
            width: 700px;
            margin-bottom: 30px;
            text-align: left;
            box-shadow: 0 0 0 1px rgb(0 0 0 / 10%), 0 2px 3px rgb(0 0 0 / 15%);
            padding: 30px 28px 28px;
            color: '#333';
            border-color: #eee;
        }
        .copy-to-clipboard {
            font-size: 5px;
            color: cornflowerblue;
            padding-left: 5px;
            cursor: pointer;
            margin-left:15px;
        }
        .copy-to-clipboard:hover {
            color: blue;
        }
    </style>
</head>
<body>
    <?php echo $__env->make('filterheader', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <div class="wrapper">
        <?php if(isset($credit) && $credit === 0): ?>
            <div>You have no credit now. Please upgrade the plan <a>here</a></div>
        <?php endif; ?>
        <div class="container">
            <h2 class="heading">Phone Finder</h2>
            <form method="post" action="/find_phone" class="dashboard-search" id="dashboard-search">
                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                <div class="input-wrapper" data-original-title="" title="">
                
                    <input style="padding: 10px; border-right: 1px solid #ccc" class="search-input" placeholder="JohnDoe" required="required" type="text" name="fullname">
                    <span style="margin-left: 10; margin-right: 10">@</span>
                    <input style="padding: 10px; border-left: 1px solid #ccc" class="search-input" placeholder="company.com" required="required" type="text" name="domain">
                    <span style="float: right">
                        <button class="normalButton" type="submit" style="height: 100%">Search</button>
                    </span>    
                </div>
            </form>
            <div class="smallFont">Enter a full name and the domain name of the email address(for example 'hunter.io')</div>
        </div>
        <?php if(isset($contract)): ?>
        <div class="container">
            <div class="card-name"><?php echo e($contract-> first_name); ?> <?php echo e($contract-> last_name); ?></div>
            <div class="card-job"><?php echo e($contract-> job_title); ?></div>
            <div style="margin-top: 15px; font-size: 18; color:#444">Contact Details</div>
            <?php if($contract->direct_phone): ?>
            <div class="card-phone"><?php echo e($contract-> direct_phone); ?>(Direct)
            <span class="copy-to-clipboard" onClick="copyText('<?php echo e($contract->direct_phone); ?>')"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="copy" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-copy fa-w-14 fa-fw fa-2x"><path fill="currentColor" d="M320 448v40c0 13.255-10.745 24-24 24H24c-13.255 0-24-10.745-24-24V120c0-13.255 10.745-24 24-24h72v296c0 30.879 25.121 56 56 56h168zm0-344V0H152c-13.255 0-24 10.745-24 24v368c0 13.255 10.745 24 24 24h272c13.255 0 24-10.745 24-24V128H344c-13.2 0-24-10.8-24-24zm120.971-31.029L375.029 7.029A24 24 0 0 0 358.059 0H352v96h96v-6.059a24 24 0 0 0-7.029-16.97z" class=""></path></svg></span>
            </div>
            <?php endif; ?>
            <?php if($contract->phone_number): ?>
            <div class="card-phone"><?php echo e($contract-> phone_number); ?>(HQ)
            <span class="copy-to-clipboard" onClick="copyText('<?php echo e($contract->phone_number); ?>')"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="copy" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-copy fa-w-14 fa-fw fa-2x"><path fill="currentColor" d="M320 448v40c0 13.255-10.745 24-24 24H24c-13.255 0-24-10.745-24-24V120c0-13.255 10.745-24 24-24h72v296c0 30.879 25.121 56 56 56h168zm0-344V0H152c-13.255 0-24 10.745-24 24v368c0 13.255 10.745 24 24 24h272c13.255 0 24-10.745 24-24V128H344c-13.2 0-24-10.8-24-24zm120.971-31.029L375.029 7.029A24 24 0 0 0 358.059 0H352v96h96v-6.059a24 24 0 0 0-7.029-16.97z" class=""></path></svg></span>
            </div>
            <?php endif; ?>
            <div style="width: 70; border-radius: 8px; border: 1px solid #ccc; text-align: center; margin-top: 10; color: #555; cursor: pointer" onClick="saveContact('<?php echo e($contract->first_name); ?>', <?php echo e($contract->id); ?>)">save</div>
        </div>
        <?php endif; ?>

        
        
    </div>
</body>
<script>
function copyText(text) {
    result = copyToClipboard(text);
    console.log(result);
}
function saveContact(name, id) {
    var csrftoken  ='<?php echo e(csrf_token()); ?>';
    var baseurl = '<?php echo url('/'); ?>';
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': csrftoken
        },
        type:'POST',
        url:baseurl+'/savecontact',
        data: {
            'name' : name,
            'id' : id,
        },
        success:function(data){ 
            if(data.saved) {
                alert('The contact was saved to your saved leads')
            }
        }
    });
}
</script>
</html>