const cssnano = require('cssnano');
const autoprefixer = require('autoprefixer');
const postcssPresetEnv = require('postcss-preset-env');
const precss = require('precss');

module.exports = {
    plugins: [
        cssnano({preset: 'default',}),
        autoprefixer,
        precss,
        postcssPresetEnv({stage: 1})
    ],
};