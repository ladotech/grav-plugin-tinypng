# Grav TinyPNG Plugin
 
`TinyPNG` is a powerful [Grav](http://getgrav.org) Plugin that automatically processes your Page Media Images through the [TinyPNG](https://tinypng.com) lossless compression service.

# Installation

Installing the TinyPNG plugin can be done in one of two ways. Our GPM (Grav Package Manager) installation method enables you to quickly and easily install the plugin with a simple terminal command, while the manual method enables you to do so via a zip file.

## GPM Installation (Preferred)

The simplest way to install this plugin is via the [Grav Package Manager (GPM)](http://learn.getgrav.org/advanced/grav-gpm) through your system's Terminal (also called the command line).  From the root of your Grav install type:

    bin/gpm install tinypng

This will install the TinyPNG plugin into your `/user/plugins` directory within Grav. Its files can be found under `/your/site/grav/user/plugins/tinypng`.

## Manual Installation

To install this plugin, just download the zip version of this repository and unzip it under `/your/site/grav/user/plugins`. Then, rename the folder to `tinypng`. You can find these files either on [GitHub](https://github.com/getgrav/grav-plugin-tinypng) or via [GetGrav.org](http://getgrav.org/downloads/plugins#extras).

You should now have all the plugin files under

    /your/site/grav/user/plugins/tinypng

# Config Defaults

```
enabled: true
api_key: YOUR_TINYPNG_API_KEY
```

You will need to replace `YOUR_TINYPNG_API_KEY` with the key you were assigned when you signed up for the TinyPNG service. The best process to do this is to copy the [tinypng.yaml](tinypng.yaml) file into your `user/config/plugins/` folder (create it if it doesn't exist), and then modify there.  This will override the default settings.

# Usage

When enabled the plugin will automatically send every Page Media Image file to the TinyPNG server for compression processing.  This can cause a bit of a delay on the intial page load as each image has to make a round trip to the server.  This only happens the first time however, as each image is then cached for future use.
