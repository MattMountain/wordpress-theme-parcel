## start dev mode 

```
npm run dev 
```

## sources for parcel tools:

- Hot Reload for php files: https://github.com/hirasso/parcel-plugin-watch-reload/blob/master/package.json


## Important things for parcel 

delecare your entry point for parcel instead of index.html you use index.ts. You can also use index.js.

index.ts:
```
// import the base file for your styles
import './scss/_base.scss';
```

functions.php:
```
// add js files and style file
wp_enqueue_script( 'script' , get_template_directory_uri() . '/dist/index.js' , array() , null , true );
wp_enqueue_style( 'custom-style', get_template_directory_uri() . '/dist/index.css',false,'1.1','all');
```

package.json
```
// add hot reload to all php files
// twig files is the same
"watchreload": {
    "files": "**/*.php",
    "reloadDelay": 0
  },
```