package project;

import java.awt.BorderLayout;
import java.awt.EventQueue;

import javax.swing.JFrame;
import javax.swing.JPanel;
import javax.swing.border.EmptyBorder;
import java.awt.Color;
import javax.swing.JButton;
import javax.swing.UIManager;
import java.awt.event.ActionListener;
import java.awt.event.ActionEvent;
import java.awt.Button;
import java.awt.SystemColor;
import javax.swing.JLabel;
import com.jgoodies.forms.factories.DefaultComponentFactory;
import javax.swing.JTextField;
import javax.swing.JSeparator;
import javax.swing.SwingConstants;
import javax.swing.ImageIcon;
import java.awt.Label;
import java.awt.Panel;
import java.awt.Font;
import javax.swing.JRadioButton;

public class signup extends JFrame {

	private JPanel contentPane;
	private JTextField textField;
	private JTextField textField_1;
	private JTextField textField_2;
	private JLabel lblNewLabel_2;
	private JLabel lblNewLabel_3;
	private JTextField textField_3;
	private JLabel lblNewLabel_4;
	private JLabel lblNewLabel_5;
	private JTextField textField_5;
	private JLabel lblNewLabel_6;
	private JLabel lblNewLabel_7;
	private JLabel lblNewLabel_8;

	/**
	 * Launch the application.
	 */
	public static void main(String[] args) {
		EventQueue.invokeLater(new Runnable() {
			public void run() {
				try {
					signup frame = new signup();
					frame.setUndecorated(true);
					frame.setVisible(true);
				} catch (Exception e) {
					e.printStackTrace();
				}
			}
		});
	}

	/**
	 * Create the frame.
	 */
	public signup() {
		setBackground(Color.WHITE);
		setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		setBounds(100, 100, 720, 420);
		contentPane = new JPanel();
		contentPane.setBackground(Color.WHITE);
		setContentPane(contentPane);
		contentPane.setLayout(null);
		
		JPanel panel = new JPanel();
		panel.setBackground(Color.DARK_GRAY);
		panel.setBounds(0, 0, 360, 398);
		contentPane.add(panel);
		panel.setLayout(null);
		
		JLabel lblNewLabel_9 = new JLabel("");
		lblNewLabel_9.setBounds(180, 5, 0, 0);
		lblNewLabel_9.setIcon(new ImageIcon(signup.class.getResource("/images/a.jpg")));
		panel.add(lblNewLabel_9);
		
		lblNewLabel_6 = new JLabel("");
		lblNewLabel_6.setBounds(185, 5, 0, 0);
		panel.add(lblNewLabel_6);
		
		lblNewLabel_8 = new JLabel("");
		lblNewLabel_8.setBounds(190, 5, 0, 0);
		panel.add(lblNewLabel_8);
		lblNewLabel_8.setIcon(new ImageIcon(signup.class.getResource("/images/a.jpg")));
		lblNewLabel_8.setForeground(Color.BLACK);
		
		lblNewLabel_7 = new JLabel("");
		lblNewLabel_7.setBounds(195, 5, 0, 0);
		lblNewLabel_7.setIcon(new ImageIcon(signup.class.getResource("/images/a.jpg")));
		panel.add(lblNewLabel_7);
		
		JLabel lblNewLabel_10 = new JLabel("Create New Account");
		lblNewLabel_10.setHorizontalAlignment(SwingConstants.CENTER);
		lblNewLabel_10.setFont(new Font("Lucida Grande", Font.PLAIN, 27));
		lblNewLabel_10.setForeground(Color.WHITE);
		lblNewLabel_10.setBounds(42, 131, 283, 42);
		panel.add(lblNewLabel_10);
		
		JRadioButton rdbtnNewRadioButton = new JRadioButton("Admin");
		rdbtnNewRadioButton.setFont(new Font("Lucida Grande", Font.PLAIN, 14));
		rdbtnNewRadioButton.setHorizontalAlignment(SwingConstants.CENTER);
		rdbtnNewRadioButton.setForeground(Color.WHITE);
		rdbtnNewRadioButton.setBounds(184, 185, 141, 23);
		panel.add(rdbtnNewRadioButton);
		
		JRadioButton rdbtnCustomer = new JRadioButton("Customer");
		rdbtnCustomer.setFont(new Font("Lucida Grande", Font.PLAIN, 14));
		rdbtnCustomer.setHorizontalAlignment(SwingConstants.CENTER);
		rdbtnCustomer.setForeground(Color.WHITE);
		rdbtnCustomer.setBounds(49, 185, 141, 23);
		panel.add(rdbtnCustomer);
		
		JButton btnNewButton = new JButton("Sign Up");
		btnNewButton.setForeground(new Color(65, 105, 225));
		btnNewButton.setBackground(new Color(241,57,83));
		btnNewButton.setBounds(470, 324, 163, 45);
		contentPane.add(btnNewButton);
		
		textField = new JTextField();
		textField.setBounds(414, 43, 214, 33);
		contentPane.add(textField);
		textField.setColumns(10);
		
		JLabel lblNewLabel = new JLabel("Name");
		lblNewLabel.setHorizontalAlignment(SwingConstants.CENTER);
		lblNewLabel.setLabelFor(textField);
		lblNewLabel.setForeground(new Color(241,57,83));
		lblNewLabel.setBounds(409, 24, 61, 26);
		contentPane.add(lblNewLabel);
		
		textField_1 = new JTextField();
		textField_1.setBounds(414, 88, 271, 33);
		contentPane.add(textField_1);
		textField_1.setColumns(10);
		
		textField_2 = new JTextField();
		textField_2.setHorizontalAlignment(SwingConstants.CENTER);
		textField_2.setColumns(10);
		textField_2.setBounds(414, 133, 271, 33);
		contentPane.add(textField_2);
		
		JLabel lblNewLabel_1 = new JLabel("Email Id");
		lblNewLabel.setHorizontalAlignment(SwingConstants.CENTER);
		lblNewLabel_1.setLabelFor(textField);
		lblNewLabel_1.setForeground(new Color(241,57,83));
		lblNewLabel_1.setBounds(416, 70, 61, 26);
		contentPane.add(lblNewLabel_1);
		
		lblNewLabel_2 = new JLabel("Mobile no.");
		lblNewLabel_2.setForeground(new Color(241, 57, 83));
		lblNewLabel_2.setBounds(416, 114, 66, 26);
		contentPane.add(lblNewLabel_2);
		
		lblNewLabel_3 = new JLabel("Date of birth");
		lblNewLabel_3.setForeground(new Color(241,57,83));
		lblNewLabel_3.setHorizontalAlignment(SwingConstants.CENTER);
		lblNewLabel_3.setBounds(416, 163, 80, 16);
		contentPane.add(lblNewLabel_3);
		
		textField_3 = new JTextField();
		lblNewLabel_2.setLabelFor(textField_3);
		textField_3.setBounds(414, 181, 271, 33);
		contentPane.add(textField_3);
		textField_3.setColumns(10);
		
		lblNewLabel_4 = new JLabel("Create Password");
		lblNewLabel_4.setForeground(new Color(241,57,83));
		lblNewLabel_4.setHorizontalAlignment(SwingConstants.CENTER);
		lblNewLabel_4.setBounds(398, 213, 141, 16);
		contentPane.add(lblNewLabel_4);
		
		JTextField textField_4 = new JTextField();
		lblNewLabel_3.setLabelFor(textField_4);
		textField_4.setBounds(414, 230, 271, 33);
		contentPane.add(textField_4);
		textField_4.setColumns(10);
		
		lblNewLabel_5 = new JLabel("Confirm Password");
		lblNewLabel_5.setForeground(new Color(241,57,83));
		lblNewLabel_5.setHorizontalAlignment(SwingConstants.CENTER);
		lblNewLabel_5.setBounds(414, 263, 124, 16);
		contentPane.add(lblNewLabel_5);
		
		textField_5 = new JTextField();
		lblNewLabel_5.setLabelFor(textField_5);
		lblNewLabel_4.setLabelFor(textField_5);
		textField_5.setBounds(414, 279, 271, 33);
		contentPane.add(textField_5);
		textField_5.setColumns(10);
	}
}
