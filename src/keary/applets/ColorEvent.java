// Program Name: ColorEvent
// Author: J.Keary
// Written: October 1st, 2011
// Class: Java Music Systems
// Homework: Assignment 1, write your own event handling applet
// Teacher: Professor Nick Didkovsky
// 
// This applet will change colors when you click the buttons

package keary.applets;

import java.awt.*;
import java.awt.Panel;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;

public class ColorEvent extends java.applet.Applet implements ActionListener {
	
	Label myLabel;
	Label myLabel1;
	Label myLabel2;
	
	Button myButton;
	Button myButton1;

	Panel buttonPanel;
	
	public void init() {
		System.out.println("init");
	}
	
	public void start() {
		System.out.println("start");
		
		setLayout(new BorderLayout());
		setBackground(Color.BLACK);
	
		myLabel = new Label("the screen is black", Label.CENTER);
	
		setForeground(Color.GREEN);
		Panel leftPanel = new Panel();
		leftPanel.add(myLabel);
		add("West", leftPanel);
		
		buttonPanel = new Panel();
		buttonPanel.setLayout(new GridLayout(2, 1));
		
		myButton = new Button("green");
		buttonPanel.add(myButton);
		myButton.addActionListener(this);
		
		myButton1 = new Button("black");
		buttonPanel.add(myButton1);
		myButton1.addActionListener(this);
		
		Panel centerPanel = new Panel();
		centerPanel.add(buttonPanel);
		add("Center", centerPanel);
	
		myLabel1 = new Label("now it's green", Label.CENTER);
		setForeground(Color.BLACK);
		Panel rightPanel = new Panel();
		rightPanel.add(myLabel1);
		add("East", rightPanel);
		
		myLabel2 = new Label("but now it is orange!\nyou have been fooled", Label.CENTER);
		setForeground(Color.BLACK);
		Panel topPanel = new Panel();
		topPanel.add(myLabel2);
		add("North", topPanel);

	}

	public void stop() {
		myLabel.setText("bye bye");
		System.out.println("stop");
	
	}
	
	public void actionPerformed(ActionEvent evt) {
		System.out.println();
		Object source = evt.getSource();
		if (source == myButton) {
				System.out.println("user clicked the green button");
				this.setBackground(Color.GREEN);
				myLabel2.setForeground(Color.GREEN);
		}
		if (source == myButton1) {
				System.out.println("user clicked the black button, user was fooled");
				this.setBackground(Color.ORANGE);
				myLabel.setForeground(Color.ORANGE);
				myLabel1.setForeground(Color.ORANGE);
				myLabel2.setForeground(Color.BLACK);
		}
	}

}