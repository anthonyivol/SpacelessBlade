<?php

namespace hedronium\SpacelessBlade;

use Blade;

class SpacelessBladeProvider extends \Illuminate\Support\ServiceProvider
{
    public function boot()
    {
        //Register the Starting Tag
        Blade::directive('spaceless', function() {
            return '<?php ob_start() ?>';
        });

        //Register the Ending Tag
        Blade::directive('endspaceless', function() {
            $replace = [
                "/\n([\S])/" => '$1',
                "/\r/" => '',
                "/\n/" => '',
                "/\t/" => '',
                "/ +/" => ' ',
                "/> +</" => '><',
            ];
            $keys = implode("','", array_keys($replace));
            $values = implode("','", array_values($replace));
            return "<?php echo preg_replace(['" . $keys . "'], ['" . $values . "'], ob_get_clean()); ?>";
        });
    }
}
