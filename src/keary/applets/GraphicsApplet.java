package keary.applets;

import java.awt.BorderLayout;

import keary.graphics.CanvasExample;

public class GraphicsApplet extends java.applet.Applet {

	CanvasExample myCanvas;
	
	public void start() {
		myCanvas = new CanvasExample();
		setLayout(new BorderLayout());
		add(myCanvas);
		
	}
	
	public void stop() {
		removeAll();
		
	}
	
}