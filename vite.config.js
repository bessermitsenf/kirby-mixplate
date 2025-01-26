import config from '@bessermitsenf/seedling/vite-config'
export default config

// import {resolve} from 'path';
// import kirby from 'vite-plugin-kirby';
// // import {browserslistToTargets, Features} from 'lightningcss';
// // import browserslist from 'browserslist';

// const input = [
// 	'src/index.js',
// ].map(path => resolve(process.cwd(), path));

// export default ({mode}) => {
// 	/**
// 	 * @type {import('vite').UserConfig}
// 	 */
// 	return {
// 		root: 'src/',
// 		base: mode === 'development' ? '/' : '/dist/',

//     css: {
//       // transformer: 'lightningcss',
//       // lightningcss: {
//       //   targets: browserslistToTargets(browserslist('defaults')),
//       //   exclude: Features.IsSelector | Features.NotSelectorList | Features.LogicalProperties,
//       // }
//     },

// 		build: {
// 			outDir: resolve(process.cwd(), 'public/dist'),
// 			emptyOutDir: true,
// 			manifest: true,
//       assetsInlineLimit: 5120,
//       // cssMinify: 'lightningcss',
// 			sourcemap: true,
// 			rollupOptions: {
// 				input,
// 			},
// 		},

// 		plugins: [
// 			kirby({
// 				kirbyConfigDir: 'storage/config',
// 			}),
// 		],
// 	};
// };
