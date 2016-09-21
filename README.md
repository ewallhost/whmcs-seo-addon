# whmcs-seo-addon
WHMCS SEO Addon

1. Upload Files.
	Upload module directory to WHMCS root installation folder.

2. Open /templates/{templatename}/header.tpl and add following lines
        <title>{if $seotitle eq ""} {if $kbarticle.title}{$kbarticle.title} - {/if}{$companyname} - {$pagetitle} {else} {$seotitle} {/if}</title>
        <meta name="keywords" content="{$seokeyword}">
        <meta name="description" content="{$seodecription}">
        <meta property="og:url" content="{$fburl}" />
        <meta property="og:type" content="{$fbtype}" />
        <meta property="og:title" content="{$fbtitle}" />
        <meta property="og:description" content="{$fbdesc}" />
        <meta property="og:image" content="{$fbimage}" />

3. Activate eWallHost WHMCS SEO Module.
        Log in to WHMCS Admin Panel . Go to  'Setup' -> 'Addon Modules'. Find 'eWallHost.com SEO Addon' and then click 'Activate' button. Click ‘Configure’ Button enable check boxes of WHMCS Roles and press 'Save Changes'.
