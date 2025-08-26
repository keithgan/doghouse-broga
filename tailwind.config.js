module.exports = {
    purge: [
		'./resources/views/**/*.blade.php',
		'./resources/css/**/*.css',
		'./resources/js/**/*.js',
    ],
    theme: {
      	extend: {},
    },
    variants: {
		extend: {
			fontSize: ['responsive'], // just to be explicit
		},
    },
    plugins: [],
  };
  