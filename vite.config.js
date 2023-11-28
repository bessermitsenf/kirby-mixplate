import {resolve} from 'path';
import kirby from 'vite-plugin-kirby';

export default ({mode}) =>
/**
	 * @type {import('vite').UserConfig}
	 */
	({
		root: 'src',
		base: mode === 'development' ? '/' : '/dist/',

		build: {
			outDir: resolve(process.cwd(), 'public/dist'),
			emptyOutDir: true,
			manifest: true,
			sourcemap: true,
			rollupOptions: {
				input: [resolve(process.cwd(), 'src/js/index.js')],
			},
		},

		plugins: [
			kirby({
				kirbyConfigDir: 'storage/config',
			}),
		],
	});

