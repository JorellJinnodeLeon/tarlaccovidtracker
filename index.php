<?php header('Access-Control-Allow-Origin: *'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>JavaScript - read JSON from URL</title>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
</head>

<body>
    <div class="mypanel"></div>

    <script>
    $.getJSON('https://script.googleusercontent.com/macros/echo?user_content_key=hZhRuw8W9d82myNC8z1ozU7qWDbxAU5Gu2Qr-vp00YuwQq7l5CdxCWUeeg0bYqgzrbs2FyaOB1uy2uaX9F_nQQ3K6XiNxWvHm5_BxDlH2jW0nuo2oDemN9CCS2h10ox_1xSncGQajx_ryfhECjZEnGfDkXdrbDxMugT-HyMFZJw6RCFpQg8NkwMxzejB0qS3Q_nzDWpy9Eb8m5FEJx2U2CcfNc2fO4hD&lib=MbaT_K8oLzDbxFJCYvFV9CLCijSy8ole7', function(data) {
        var text = `id: ${data.id}<br>
                    name: ${data.name}<br>`
        $(".mypanel").html(text);
    });
    </script>
    
</body>
</html>