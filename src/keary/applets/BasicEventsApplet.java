package keary.applets;

import java.awt.*;
import java.awt.event.*;

public class BasicEventsApplet extends java.applet.Applet implements
		ActionListener {

	Label myLabel;

	Button timeButton;
	Button numberButton1;

	TextArea myTextArea;
	TextField myTextField;

	long whenDidIStart;

	public void init() {
		System.out.println("init");
	}

	public void start() {
		System.out.println("start");
		whenDidIStart = System.currentTimeMillis();

		setLayout(new BorderLayout(20, 10));
		setBackground(Color.PINK);

		myLabel = new Label(
				"Hello, I am James's 2nd Applet.\n here are some things that I can do:",
				Label.CENTER);
		setForeground(Color.DARK_GRAY);

		Panel p = new Panel();
		p.add(myLabel);
		add(BorderLayout.NORTH, p);

		myTextArea = new TextArea("This is a TextArea.", 6, 35);

		Panel p2 = new Panel();
		p2.add(myTextArea);
		add(BorderLayout.CENTER, p2);

		timeButton = new Button("Hey TextArea, \n what time is it?");
		timeButton.addActionListener(this);

		Panel p3 = new Panel();
		p3.add(timeButton);
		add(BorderLayout.WEST, p3);

		myTextField = new TextField("12", 10);

		Panel p4 = new Panel();
		p4.add(new Label("enter an integer here:"));
		p4.add(myTextField);
		add(BorderLayout.SOUTH, p4);

		numberButton1 = new Button(
				"Hey TextField,\nI'm gonna take whats inside of you\nand multiply by 2");
		numberButton1.addActionListener(this);

		Panel p5 = new Panel();
		p5.add(numberButton1);
		add(BorderLayout.EAST, p5);

	}

	public void stop() {
		System.out.println("stop");

	}

	public void actionPerformed(ActionEvent evt) {
		System.out.println();
		Object source = evt.getSource();
		if (source == timeButton) {
			handleTimeButton();
		}
		if (source == numberButton1) {
			handleNumber();
		}
	}

	private void handleNumber() {
		System.out.println("user clicked Button corresponding to TextField");
		String userInput = myTextField.getText();
		int value = (new Integer(userInput)).intValue();
		myTextArea.setText("");
		myTextArea.append("the numeric value of the text in the TextField is "
				+ value + "\n double that is " + value * 2);
	}

	private void handleTimeButton() {
		System.out.println("user clicked Button corresponding to TextArea");
		long millis = System.currentTimeMillis();
		myTextArea.setText("");
		myTextArea.append("the current time in milliseconds is: \n" + millis
				+ "\ndo you know where your children are?\n");
		myTextArea.append("It's been " + (millis - whenDidIStart)
				+ " since Applet started");

	}

}
