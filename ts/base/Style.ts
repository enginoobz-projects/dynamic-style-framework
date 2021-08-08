import { insertEmptyRule } from '../global.js';
import { StyleConfig } from '../StyleConfig.js';

export abstract class Style {
        name: string;
        // preffered properies are applied to a style at the first time, 
        //util we update the property for global from setting panel
        preferredOuterBg: string;
        preferredInnerBg: string;
        preferredFontFamily?: string;
        cssRule: CSSStyleRule; // to change its CSS custom properties

        constructor(styleConfig: StyleConfig) {
                this.name = styleConfig.name;
                this.preferredOuterBg = styleConfig.outerBackground ?? 'none-bg';
                this.preferredInnerBg = styleConfig.innerBackground ?? 'none-bg';
                this.preferredFontFamily = styleConfig.font;
                this.cssRule = insertEmptyRule('.' + styleConfig.name)
        }

        // protected insertEmptyRule = (selectors: string[]): CSSStyleRule => cssRules![styleSheet!.insertRule(`${this.formatSelectorsArray(selectors)} {}`)] as CSSStyleRule;

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

