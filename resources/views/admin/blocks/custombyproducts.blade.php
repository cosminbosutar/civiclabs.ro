@formField('browser', [
    'routePrefix' => 'solutions',
    'moduleName'  => 'byproducts',
    'name'        => 'custombyproducts',
    'label'       => 'Custom Byproducts',
    'max'         => 1,
])

@formField('select', [
    'name'       => 'width',
    'label'      => 'Byproduct width',
    'default'    => 'full',
    'unpack'     => true,
    'options'    => [
        [
            'value' => 'quarter',
            'label' => '25%',
        ],
        [
            'value' => 'third',
            'label' => '50%',
        ],
        [
            'value' => 'half',
            'label' => '75%',
        ],
        [
            'value' => 'full',
            'label' => '100%',
        ],
    ],
])

<div style="margin-top: 15px !important;">
    Icon <a href="https://material.io/resources/icons/?style=baseline"  target="_blank">(see all icons here)</a>
</div>

@formField('select', [
    'name' => 'icon',
    'label' => '',
    'placeholder' => 'Add icon',
    'options' => [
        [ 'value' => "", 'label' => 'no icon' ],
        [ 'value' => "3d-rotation", 'label' => '3d-rotation' ],
        [ 'value' => "accessibility", 'label' => 'accessibility' ],
        [ 'value' => "accessible", 'label' => 'accessible' ],
        [ 'value' => "account-balance", 'label' => 'account-balance' ],
        [ 'value' => "account-balance-wallet", 'label' => 'account-balance-wallet' ],
        [ 'value' => "account-box", 'label' => 'account-box' ],
        [ 'value' => "account-circle", 'label' => 'account-circle' ],
        [ 'value' => "add-shopping-cart", 'label' => 'add-shopping-cart' ],
        [ 'value' => "alarm-add", 'label' => 'alarm-add' ],
        [ 'value' => "alarm", 'label' => 'alarm' ],
        [ 'value' => "alarm-off", 'label' => 'alarm-off' ],
        [ 'value' => "alarm-on", 'label' => 'alarm-on' ],
        [ 'value' => "all-out", 'label' => 'all-out' ],
        [ 'value' => "android", 'label' => 'android' ],
        [ 'value' => "announcement", 'label' => 'announcement' ],
        [ 'value' => "aspect-ratio", 'label' => 'aspect-ratio' ],
        [ 'value' => "assessment", 'label' => 'assessment' ],
        [ 'value' => "assignment", 'label' => 'assignment' ],
        [ 'value' => "assignment-ind", 'label' => 'assignment-ind' ],
        [ 'value' => "assignment-late", 'label' => 'assignment-late' ],
        [ 'value' => "assignment-return", 'label' => 'assignment-return' ],
        [ 'value' => "assignment-returned", 'label' => 'assignment-returned' ],
        [ 'value' => "assignment-turned-in", 'label' => 'assignment-turned-in' ],
        [ 'value' => "autorenew", 'label' => 'autorenew' ],
        [ 'value' => "backup", 'label' => 'backup' ],
        [ 'value' => "book", 'label' => 'book' ],
        [ 'value' => "bookmark", 'label' => 'bookmark' ],
        [ 'value' => "bookmark-border", 'label' => 'bookmark-border' ],
        [ 'value' => "bug-report", 'label' => 'bug-report' ],
        [ 'value' => "build", 'label' => 'build' ],
        [ 'value' => "cached", 'label' => 'cached' ],
        [ 'value' => "camera-enhance", 'label' => 'camera-enhance' ],
        [ 'value' => "card-giftcard", 'label' => 'card-giftcard' ],
        [ 'value' => "card-membership", 'label' => 'card-membership' ],
        [ 'value' => "card-travel", 'label' => 'card-travel' ],
        [ 'value' => "change-history", 'label' => 'change-history' ],
        [ 'value' => "check-circle", 'label' => 'check-circle' ],
        [ 'value' => "chrome-reader-mode", 'label' => 'chrome-reader-mode' ],
        [ 'value' => "class", 'label' => 'class' ],
        [ 'value' => "code", 'label' => 'code' ],
        [ 'value' => "compare-arrows", 'label' => 'compare-arrows' ],
        [ 'value' => "copyright", 'label' => 'copyright' ],
        [ 'value' => "credit-card", 'label' => 'credit-card' ],
        [ 'value' => "dashboard", 'label' => 'dashboard' ],
        [ 'value' => "date-range", 'label' => 'date-range' ],
        [ 'value' => "delete", 'label' => 'delete' ],
        [ 'value' => "delete-forever", 'label' => 'delete-forever' ],
        [ 'value' => "description", 'label' => 'description' ],
        [ 'value' => "dns", 'label' => 'dns' ],
        [ 'value' => "done-all", 'label' => 'done-all' ],
        [ 'value' => "done", 'label' => 'done' ],
        [ 'value' => "donut-large", 'label' => 'donut-large' ],
        [ 'value' => "donut-small", 'label' => 'donut-small' ],
        [ 'value' => "eject", 'label' => 'eject' ],
        [ 'value' => "euro-symbol", 'label' => 'euro-symbol' ],
        [ 'value' => "event", 'label' => 'event' ],
        [ 'value' => "event-seat", 'label' => 'event-seat' ],
        [ 'value' => "exit-to-app", 'label' => 'exit-to-app' ],
        [ 'value' => "explore", 'label' => 'explore' ],
        [ 'value' => "extension", 'label' => 'extension' ],
        [ 'value' => "face", 'label' => 'face' ],
        [ 'value' => "favorite", 'label' => 'favorite' ],
        [ 'value' => "favorite-border", 'label' => 'favorite-border' ],
        [ 'value' => "feedback", 'label' => 'feedback' ],
        [ 'value' => "find-in-page", 'label' => 'find-in-page' ],
        [ 'value' => "find-replace", 'label' => 'find-replace' ],
        [ 'value' => "fingerprint", 'label' => 'fingerprint' ],
        [ 'value' => "flight-land", 'label' => 'flight-land' ],
        [ 'value' => "flight-takeoff", 'label' => 'flight-takeoff' ],
        [ 'value' => "flip-to-back", 'label' => 'flip-to-back' ],
        [ 'value' => "flip-to-front", 'label' => 'flip-to-front' ],
        [ 'value' => "g-translate", 'label' => 'g-translate' ],
        [ 'value' => "gavel", 'label' => 'gavel' ],
        [ 'value' => "get-app", 'label' => 'get-app' ],
        [ 'value' => "gif", 'label' => 'gif' ],
        [ 'value' => "grade", 'label' => 'grade' ],
        [ 'value' => "group-work", 'label' => 'group-work' ],
        [ 'value' => "help", 'label' => 'help' ],
        [ 'value' => "help-outline", 'label' => 'help-outline' ],
        [ 'value' => "highlight-off", 'label' => 'highlight-off' ],
        [ 'value' => "history", 'label' => 'history' ],
        [ 'value' => "home", 'label' => 'home' ],
        [ 'value' => "hourglass-empty", 'label' => 'hourglass-empty' ],
        [ 'value' => "hourglass-full", 'label' => 'hourglass-full' ],
        [ 'value' => "http", 'label' => 'http' ],
        [ 'value' => "https", 'label' => 'https' ],
        [ 'value' => "important-devices", 'label' => 'important-devices' ],
        [ 'value' => "info", 'label' => 'info' ],
        [ 'value' => "info-outline", 'label' => 'info-outline' ],
        [ 'value' => "input", 'label' => 'input' ],
        [ 'value' => "invert-colors", 'label' => 'invert-colors' ],
        [ 'value' => "label", 'label' => 'label' ],
        [ 'value' => "label-outline", 'label' => 'label-outline' ],
        [ 'value' => "language", 'label' => 'language' ],
        [ 'value' => "launch", 'label' => 'launch' ],
        [ 'value' => "lightbulb-outline", 'label' => 'lightbulb-outline' ],
        [ 'value' => "line-style", 'label' => 'line-style' ],
        [ 'value' => "line-weight", 'label' => 'line-weight' ],
        [ 'value' => "list", 'label' => 'list' ],
        [ 'value' => "lock", 'label' => 'lock' ],
        [ 'value' => "lock-open", 'label' => 'lock-open' ],
        [ 'value' => "lock-outline", 'label' => 'lock-outline' ],
        [ 'value' => "loyalty", 'label' => 'loyalty' ],
        [ 'value' => "markunread-mailbox", 'label' => 'markunread-mailbox' ],
        [ 'value' => "motorcycle", 'label' => 'motorcycle' ],
        [ 'value' => "note-add", 'label' => 'note-add' ],
        [ 'value' => "offline-pin", 'label' => 'offline-pin' ],
        [ 'value' => "opacity", 'label' => 'opacity' ],
        [ 'value' => "open-in-browser", 'label' => 'open-in-browser' ],
        [ 'value' => "open-in-new", 'label' => 'open-in-new' ],
        [ 'value' => "open-with", 'label' => 'open-with' ],
        [ 'value' => "pageview", 'label' => 'pageview' ],
        [ 'value' => "pan-tool", 'label' => 'pan-tool' ],
        [ 'value' => "payment", 'label' => 'payment' ],
        [ 'value' => "perm-camera-mic", 'label' => 'perm-camera-mic' ],
        [ 'value' => "perm-contact-calendar", 'label' => 'perm-contact-calendar' ],
        [ 'value' => "perm-data-setting", 'label' => 'perm-data-setting' ],
        [ 'value' => "perm-device-information", 'label' => 'perm-device-information' ],
        [ 'value' => "perm-identity", 'label' => 'perm-identity' ],
        [ 'value' => "perm-media", 'label' => 'perm-media' ],
        [ 'value' => "perm-phone-msg", 'label' => 'perm-phone-msg' ],
        [ 'value' => "perm-scan-wifi", 'label' => 'perm-scan-wifi' ],
        [ 'value' => "pets", 'label' => 'pets' ],
        [ 'value' => "picture-in-picture-alt", 'label' => 'picture-in-picture-alt' ],
        [ 'value' => "picture-in-picture", 'label' => 'picture-in-picture' ],
        [ 'value' => "play-for-work", 'label' => 'play-for-work' ],
        [ 'value' => "polymer", 'label' => 'polymer' ],
        [ 'value' => "power-settings-new", 'label' => 'power-settings-new' ],
        [ 'value' => "pregnant-woman", 'label' => 'pregnant-woman' ],
        [ 'value' => "print", 'label' => 'print' ],
        [ 'value' => "query-builder", 'label' => 'query-builder' ],
        [ 'value' => "question-answer", 'label' => 'question-answer' ],
        [ 'value' => "receipt", 'label' => 'receipt' ],
        [ 'value' => "record-voice-over", 'label' => 'record-voice-over' ],
        [ 'value' => "redeem", 'label' => 'redeem' ],
        [ 'value' => "remove-shopping-cart", 'label' => 'remove-shopping-cart' ],
        [ 'value' => "reorder", 'label' => 'reorder' ],
        [ 'value' => "report-problem", 'label' => 'report-problem' ],
        [ 'value' => "restore", 'label' => 'restore' ],
        [ 'value' => "restore-page", 'label' => 'restore-page' ],
        [ 'value' => "room", 'label' => 'room' ],
        [ 'value' => "rounded-corner", 'label' => 'rounded-corner' ],
        [ 'value' => "rowing", 'label' => 'rowing' ],
        [ 'value' => "schedule", 'label' => 'schedule' ],
        [ 'value' => "search", 'label' => 'search' ],
        [ 'value' => "settings-applications", 'label' => 'settings-applications' ],
        [ 'value' => "settings-backup-restore", 'label' => 'settings-backup-restore' ],
        [ 'value' => "settings", 'label' => 'settings' ],
        [ 'value' => "settings-bluetooth", 'label' => 'settings-bluetooth' ],
        [ 'value' => "settings-brightness", 'label' => 'settings-brightness' ],
        [ 'value' => "settings-cell", 'label' => 'settings-cell' ],
        [ 'value' => "settings-ethernet", 'label' => 'settings-ethernet' ],
        [ 'value' => "settings-input-antenna", 'label' => 'settings-input-antenna' ],
        [ 'value' => "settings-input-component", 'label' => 'settings-input-component' ],
        [ 'value' => "settings-input-composite", 'label' => 'settings-input-composite' ],
        [ 'value' => "settings-input-hdmi", 'label' => 'settings-input-hdmi' ],
        [ 'value' => "settings-input-svideo", 'label' => 'settings-input-svideo' ],
        [ 'value' => "settings-overscan", 'label' => 'settings-overscan' ],
        [ 'value' => "settings-phone", 'label' => 'settings-phone' ],
        [ 'value' => "settings-power", 'label' => 'settings-power' ],
        [ 'value' => "settings-remote", 'label' => 'settings-remote' ],
        [ 'value' => "settings-voice", 'label' => 'settings-voice' ],
        [ 'value' => "shop", 'label' => 'shop' ],
        [ 'value' => "shop-two", 'label' => 'shop-two' ],
        [ 'value' => "shopping-basket", 'label' => 'shopping-basket' ],
        [ 'value' => "shopping-cart", 'label' => 'shopping-cart' ],
        [ 'value' => "speaker-notes", 'label' => 'speaker-notes' ],
        [ 'value' => "speaker-notes-off", 'label' => 'speaker-notes-off' ],
        [ 'value' => "spellcheck", 'label' => 'spellcheck' ],
        [ 'value' => "star-rate", 'label' => 'star-rate' ],
        [ 'value' => "stars", 'label' => 'stars' ],
        [ 'value' => "store", 'label' => 'store' ],
        [ 'value' => "subject", 'label' => 'subject' ],
        [ 'value' => "supervisor-account", 'label' => 'supervisor-account' ],
        [ 'value' => "swap-horiz", 'label' => 'swap-horiz' ],
        [ 'value' => "swap-vert", 'label' => 'swap-vert' ],
        [ 'value' => "swap-vertical-circle", 'label' => 'swap-vertical-circle' ],
        [ 'value' => "system-update-alt", 'label' => 'system-update-alt' ],
        [ 'value' => "tab", 'label' => 'tab' ],
        [ 'value' => "tab-unselected", 'label' => 'tab-unselected' ],
        [ 'value' => "theaters", 'label' => 'theaters' ],
        [ 'value' => "thumb-down", 'label' => 'thumb-down' ],
        [ 'value' => "thumb-up", 'label' => 'thumb-up' ],
        [ 'value' => "thumbs-up-down", 'label' => 'thumbs-up-down' ],
        [ 'value' => "timeline", 'label' => 'timeline' ],
        [ 'value' => "toc", 'label' => 'toc' ],
        [ 'value' => "today", 'label' => 'today' ],
        [ 'value' => "toll", 'label' => 'toll' ],
        [ 'value' => "touch-app", 'label' => 'touch-app' ],
        [ 'value' => "track-changes", 'label' => 'track-changes' ],
        [ 'value' => "translate", 'label' => 'translate' ],
        [ 'value' => "trending-down", 'label' => 'trending-down' ],
        [ 'value' => "trending-flat", 'label' => 'trending-flat' ],
        [ 'value' => "trending-up", 'label' => 'trending-up' ],
        [ 'value' => "turned-in", 'label' => 'turned-in' ],
        [ 'value' => "turned-in-not", 'label' => 'turned-in-not' ],
        [ 'value' => "update", 'label' => 'update' ],
        [ 'value' => "verified-user", 'label' => 'verified-user' ],
        [ 'value' => "view-agenda", 'label' => 'view-agenda' ],
        [ 'value' => "view-array", 'label' => 'view-array' ],
        [ 'value' => "view-carousel", 'label' => 'view-carousel' ],
        [ 'value' => "view-column", 'label' => 'view-column' ],
        [ 'value' => "view-day", 'label' => 'view-day' ],
        [ 'value' => "view-headline", 'label' => 'view-headline' ],
        [ 'value' => "view-list", 'label' => 'view-list' ],
        [ 'value' => "view-module", 'label' => 'view-module' ],
        [ 'value' => "view-quilt", 'label' => 'view-quilt' ],
        [ 'value' => "view-stream", 'label' => 'view-stream' ],
        [ 'value' => "view-week", 'label' => 'view-week' ],
        [ 'value' => "visibility", 'label' => 'visibility' ],
        [ 'value' => "visibility-off", 'label' => 'visibility-off' ],
        [ 'value' => "watch-later", 'label' => 'watch-later' ],
        [ 'value' => "work", 'label' => 'work' ],
        [ 'value' => "youtube-searched-for", 'label' => 'youtube-searched-for' ],
        [ 'value' => "zoom-in", 'label' => 'zoom-in' ],
        [ 'value' => "zoom-out", 'label' => 'zoom-out' ]
    ]
])

@formField('color', [
    'name'           => 'background_color',
    'label'          => 'Background color',
])

@formField('color', [
    'name'           => 'text_color',
    'label'          => 'Text color',
])
