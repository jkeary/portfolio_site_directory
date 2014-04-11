package keary.applets;

import java.awt.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;

public class HelloWorldApplet extends java.applet.Applet implements ActionListener {

	Label myLabel;

	Button myButton;
	Button myButton2;

	TextField textField;
	TextArea textArea;
	
	public void init() {
		System.out.println("init");
	}

	public void start() {
		System.out.println("start");
		myLabel = new Label("This is James's first applet", Label.LEFT);
		
		setLayout(new BorderLayout());

		Panel p = new Panel();
		p.setLayout(new GridLayout(0, 1));
		p.add(myLabel);
		p.add(new Label("hi there", Label.LEFT));
		p.add(new Label("for my first applet I wanted to ask you about food preferences", Label.LEFT));

		add(BorderLayout.SOUTH, p);
		
		myButton = new Button("Click me if you want tacos");
		 p = new Panel();
		p.add(myButton);
		add(BorderLayout.NORTH, p);
		myButton.addActionListener(this);
		
		myButton2 = new Button("click me if you want pizza");
		 p = new Panel();
		p.add(myButton2);
		add(BorderLayout.CENTER, p);
		myButton2.addActionListener(this);
		
	}

	public void stop() {
		myLabel.setText("byebye");
		System.out.println("stop");
	}
	
	public void actionPerformed(ActionEvent evt) {
		System.out.println("Click!!!!");
		Object source = evt.getSource();
		if (source == myButton) {
				System.out.println("they want tacos");
		}
		if (source == myButton2) {
				System.out.println("they want pizza");
		}
	}
	
}
