import { StyleName } from '../Config.js';
import { DynamicUI } from '../DynamicUI.js';

export abstract class Style {
        name: StyleName;
        // preffered properies are applied to a style at the first time, 
        //util we update the property for global from setting panel
        preferredOuterBg: string;
        preferredInnerBg: string;
        preferredFontFamily?: string;

        constructor(name: StyleName, preferredOuterBg: string = 'none-bg', preferredInnerBg: string = 'none-bg', preferredFontFamily?: string) {
                this.name = name;
                this.preferredOuterBg = preferredOuterBg;
                this.preferredInnerBg = preferredInnerBg;
                this.preferredFontFamily = preferredFontFamily;
        }

        protected insertEmptyRule = (selectors: string[]): CSSStyleRule => DynamicUI.cssRules![DynamicUI.styleSheet!.insertRule(`${this.formatSelectorsArray(selectors)} {}`)] as CSSStyleRule;

        private formatSelectorsArray(array: string[]): string {
                return array.map(selector => `.${this.name} ${selector}`).join(", ");
        }

        onEnable(): void {
                this.init();
                this.setupCustomizeEvents();
        };
        abstract setupCustomizeEvents(): void; // events for customize the style in the setting panel
        abstract init(): void;

        abstract onDisable(): void;

        // DRY: update common functions, e.g. bgScheme, bgHighlight....
        abstract onHighlightColorUpdated(): void;
        abstract onSchemeColorUpdated(): void;
        abstract onBaseColorUpdated(): void;
}

