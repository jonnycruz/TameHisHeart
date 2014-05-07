<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-47458202-1']);
  _gaq.push(['_setDomainName', 'tamehisheart.com']);
  _gaq.push(['_trackPageview']);

 _gaq.push(['_addTrans',
    '<?php echo getcookieinfo("transaction_id"); ?>',           // transaction ID - required
    '<?php echo getcookieinfo("storename"); ?>', // affiliation or store name
    '<?php echo getcookieinfo("total"); ?>',          // total - required
    '<?php echo getcookieinfo("tax"); ?>',           // tax
    '<?php echo getcookieinfo("shipping"); ?>',          // shipping
    '<?php echo getcookieinfo("city"); ?>',       // city
    '<?php echo getcookieinfo("state"); ?>',     // state or province
    '<?php echo getcookieinfo("country"); ?>'             // country
 ]);
 _gaq.push(['_addItem',
    '<?php echo getcookieinfo("transaction_id"); ?>',           // transaction ID - necessary to associate item with transaction
    '<?php echo getcookieinfo("skucode"); ?>',           // SKU/code - required
    '<?php echo getcookieinfo("product"); ?>',        // product name
    '<?php echo getcookieinfo("category"); ?>',   // category or variation
    '<?php echo getcookieinfo("unit_price"); ?>',          // unit price - required
    '<?php echo getcookieinfo("quantity"); ?>'               // quantity - required
 ]);
 
_gaq.push(['_addItem',
    '<?php echo getcookieinfo("transaction_id"); ?>',           // transaction ID - necessary to associate item with transaction
    'THH - KLIC - PP',           // SKU/code - required
    'Keys to an Intimate Connection PP',        // product name
    'none',   // category or variation
    '199.85',          // unit price - required
    '1'               // quantity - required
 ]);

 _gaq.push(['_trackTrans']);

 (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();


</script>
