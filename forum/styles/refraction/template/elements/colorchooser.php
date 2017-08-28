<?php
class RokColorChooser {
	function newRainbow($name)
	{
		return "
		window.addEvent('domready', function() {		
			var input = $('".$name."');
			var r_".$name." = new MooRainbow('myRainbow_".$name."_input', {
				id: 'myRainbow_".$name."',
				startColor: $('".$name."').getValue().hexToRgb(true),
				imgPath: '../styles/refraction/template/moorainbow/images/',
				onChange: function(color) {
					$('ref_preset_style').selectedIndex = $('ref_preset_style').getChildren().length - 1;
					input.getNext().getFirst().setStyle('background-color', color.hex);
					input.value = color.hex;
				}
			});
			r_".$name.".okButton.setStyle('outline', 'none');
			$('myRainbow_".$name."_input').addEvent('click', function() {
				r_".$name.".okButton.focus();
			});
			input.addEvent('keyup', function(e) {
				e = new Event(e);
				if ((this.value.length == 4 || this.value.length == 7) && this.value[0] == '#') {
					var rgb = new Color(this.value);
					var hex = this.value;
					var hsb = rgb.rgbToHsb();
					var color = {
						'hex': hex,
						'rgb': rgb,
						'hsb': hsb
					}
					r_".$name.".fireEvent('onChange', color);
					r_".$name.".manualSet(color.rgb);
				};
			});
			input.getNext().getFirst().setStyle('background-color', r_".$name.".sets.hex);
			rainbowLoad('myRainbow_".$name."');
		});\n";
	}
}

?>