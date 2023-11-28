<?php

use Kirby\Cms\File;

$attr = $attr ?? [];
$imgAttr = $imgAttr ?? [];
$file = is_a($item, File::class) ? $item : $item?->toFile();
$href = $href ?? null;
$tag = $href ? 'a' : ($tag ?? 'div');
$lazyload = $lazyload ?? true;
$preset = $preset ?? 'default';
$sizes = $sizes ?? null;

if (! $file) {
	return;
}

$alt = $alt ?? $file->alt()->toString();
$resize = $resize ?? !in_array($file->extension(), ['gif', 'svg']);

if ($resize) {
	if (is_string($preset)) {
		// string given, must be a preset
		$configPreset = option("thumbs.srcsets.{$preset}", null);

		if (! is_array($configPreset)) {
			throw new Exception("Unknown preset '{$preset}'");
		}

		if (str_ends_with($firstDescriptor = array_key_first($configPreset), 'x')) {
			// resolution descriptors 1x, 2x etc.
			$fallbackOptions = is_array($configPreset) ? $configPreset[$firstDescriptor] : $preset;
			$sizes = null;
		} else {
			// treat as width descriptors 100w, 200w etc.
			$fallbackOptions = is_array($configPreset) ? end($configPreset) : $preset;
			$sizes = $sizes ?? '100vw';
		}

		if (is_int($fallbackOptions)) {
			$fallbackOptions = ['width' => $fallbackOptions];
		}

		$fallback = $file->thumb($fallbackOptions);
		$srcset = $file->srcset($preset);
	} elseif (is_array($preset)) {
		// array given, treat as thumb options
		$fallback = $file->thumb($preset);
	}
} else {
	$fallback = $file;
}

$src = $fallback->url();
$width = $fallback->width();
$height = $fallback->height();

$ratioStyle = (function () use ($width, $height) {
	return "--aspect-ratio: {$width}/{$height};";
})();

?>
<<?= $tag ?> <?= attributes([
  'style' => $ratioStyle,
  'href'  => $href,
])->merge($attr)
?>>
  <img <?= attributes([
	'src' => $src,
	'srcset' => $srcset ?? null,
	'sizes' => $sizes,
	'width' => $width,
	'height' => $height,
	'loading' => r($lazyload, 'lazy'),
	'alt' => ! empty($alt) ? $alt : ' ', // TODO: Why do we need a single space string here to get an empty alt attributes?
  ])->merge($imgAttr) ?>>
</<?= $tag ?>>
