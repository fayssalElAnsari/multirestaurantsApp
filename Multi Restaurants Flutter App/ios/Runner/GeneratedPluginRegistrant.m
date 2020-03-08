//
//  Generated file. Do not edit.
//

#import "GeneratedPluginRegistrant.h"
#import <firebase_analytics/FirebaseAnalyticsPlugin.h>
#import <firebase_messaging/FirebaseMessagingPlugin.h>
#import <flutter_inappbrowser/InAppBrowserFlutterPlugin.h>
#import <google_maps_flutter/GoogleMapsPlugin.h>
#import <location/LocationPlugin.h>
#import <shared_preferences/SharedPreferencesPlugin.h>
#import <url_launcher/UrlLauncherPlugin.h>

@implementation GeneratedPluginRegistrant

+ (void)registerWithRegistry:(NSObject<FlutterPluginRegistry>*)registry {
  [FLTFirebaseAnalyticsPlugin registerWithRegistrar:[registry registrarForPlugin:@"FLTFirebaseAnalyticsPlugin"]];
  [FLTFirebaseMessagingPlugin registerWithRegistrar:[registry registrarForPlugin:@"FLTFirebaseMessagingPlugin"]];
  [InAppBrowserFlutterPlugin registerWithRegistrar:[registry registrarForPlugin:@"InAppBrowserFlutterPlugin"]];
  [FLTGoogleMapsPlugin registerWithRegistrar:[registry registrarForPlugin:@"FLTGoogleMapsPlugin"]];
  [LocationPlugin registerWithRegistrar:[registry registrarForPlugin:@"LocationPlugin"]];
  [FLTSharedPreferencesPlugin registerWithRegistrar:[registry registrarForPlugin:@"FLTSharedPreferencesPlugin"]];
  [FLTUrlLauncherPlugin registerWithRegistrar:[registry registrarForPlugin:@"FLTUrlLauncherPlugin"]];
}

@end
