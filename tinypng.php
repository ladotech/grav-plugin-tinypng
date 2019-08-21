<?php
namespace Grav\Plugin;

use Grav\Common\Plugin;
use RocketTheme\Toolbox\Event\Event;

class TinypngPlugin extends Plugin
{
    protected $tinypng;

    public static function getSubscribedEvents()
    {
        return [
            'onPluginsInitialized' => ['onPluginsInitialized', 0]
        ];
    }

    /**
     * Activate plugin if path matches to the configured one.
     */
    public function onPluginsInitialized()
    {
        if ($this->isAdmin()) {
            $this->active = false;
            return;
        }
        require_once __DIR__ . '/classes/tinypng.php';
        $this->tinypng = new Tinypng($this->config->get('plugins.tinypng.api_key'));
        $this->enable([
            'onImageMediumSaved' => ['onImageMediumSaved', 0],
        ]);
    }

    public function onImageMediumSaved(Event $event)
    {
        $path = $event['image'];
        $result = $this->tinypng->tinify($path);
        if (!empty($result)) {
            file_put_contents($path, $result);
        }
    }
}
