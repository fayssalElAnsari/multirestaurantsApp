package io.flutter.plugins;

import io.flutter.plugin.common.PluginRegistry;
import io.flutter.plugins.firebaseanalytics.FirebaseAnalyticsPlugin;
import io.flutter.plugins.firebasemessaging.FirebaseMessagingPlugin;
import com.pichillilorenzo.flutter_inappbrowser.InAppBrowserFlutterPlugin;
import io.flutter.plugins.googlemaps.GoogleMapsPlugin;
import com.lyokone.location.LocationPlugin;
import io.flutter.plugins.sharedpreferences.SharedPreferencesPlugin;
import io.flutter.plugins.urllauncher.UrlLauncherPlugin;

/**
 * Generated file. Do not edit.
 */
public final class GeneratedPluginRegistrant {
  public static void registerWith(PluginRegistry registry) {
    if (alreadyRegisteredWith(registry)) {
      return;
    }
    FirebaseAnalyticsPlugin.registerWith(registry.registrarFor("io.flutter.plugins.firebaseanalytics.FirebaseAnalyticsPlugin"));
    FirebaseMessagingPlugin.registerWith(registry.registrarFor("io.flutter.plugins.firebasemessaging.FirebaseMessagingPlugin"));
    InAppBrowserFlutterPlugin.registerWith(registry.registrarFor("com.pichillilorenzo.flutter_inappbrowser.InAppBrowserFlutterPlugin"));
    GoogleMapsPlugin.registerWith(registry.registrarFor("io.flutter.plugins.googlemaps.GoogleMapsPlugin"));
    LocationPlugin.registerWith(registry.registrarFor("com.lyokone.location.LocationPlugin"));
    SharedPreferencesPlugin.registerWith(registry.registrarFor("io.flutter.plugins.sharedpreferences.SharedPreferencesPlugin"));
    UrlLauncherPlugin.registerWith(registry.registrarFor("io.flutter.plugins.urllauncher.UrlLauncherPlugin"));
  }

  private static boolean alreadyRegisteredWith(PluginRegistry registry) {
    final String key = GeneratedPluginRegistrant.class.getCanonicalName();
    if (registry.hasPlugin(key)) {
      return true;
    }
    registry.registrarFor(key);
    return false;
  }
}
