module.exports = {
	content: [
		'site/**/*.php',
	],
	theme: {
		screens: {
			// Default screen sizes of Tailwind, but in `em` instead of `px`
			// plus an additional `xs` breakpoint
			xs: '30em', //  480px
			sm: '40em', //  640px
			md: '48em', //  768px
			lg: '64em', // 1024px
			xl: '80em', // 1280px
			'2xl': '96em', // 1536px
		},
		fontFamily: {
			sans: 'var(--font-family-sans)',
			mono: 'var(--font-family-mono)',
		},
		extend: {
			colors: {
				/* Generic */
				transparent: 'transparent',
				current: 'currentColor',
				inherit: 'inherit',
				black: 'hsl(var(--color-black) / <alpha-value>)',
				white: 'hsl(var(--color-white) / <alpha-value>)',
				/* Color theming */
				'theme-background': 'hsl(var(--theme--background) / <alpha-value>)',
				'theme-foreground': 'hsl(var(--theme--foreground) / <alpha-value>)',
			},
			maxWidth: {
				prose: 'var(--max-width-prose)',
			},
			spacing: {
				sides: 'var(--spacing-sides)',
			},
			zIndex: {
				max: '2147483647',
			},
		},
	},
};
