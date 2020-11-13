package project;

import java.awt.EventQueue;

import javax.swing.JFrame;
import javax.swing.JPanel;
import javax.swing.JLabel;
import javax.swing.ImageIcon;
import java.awt.Color;
import javax.swing.SwingConstants;
import java.awt.Font;
import javax.swing.UIManager;
import javax.swing.JScrollPane;
import javax.swing.JTextField;
import java.awt.Button;
import javax.swing.JButton;
import javax.swing.JRadioButton;
import java.awt.SystemColor;
import javax.swing.border.EtchedBorder;

public class pro {

	private JFrame frame;
	private JTextField textField;
	private JTextField textField_1;
	private JTextField textField_2;
	private JTextField textField_3;
	private JTextField textField_4;
	private JTextField textField_5;
	private JTextField textField_6;

	/**
	 * Launch the application.
	 */
	public static void main(String[] args) {
		EventQueue.invokeLater(new Runnable() {
			public void run() {
				try {
					pro window = new pro();
					window.frame.setVisible(true);
				} catch (Exception e) {
					e.printStackTrace();
				}
			}
		});
	}

	/**
	 * Create the application.
	 */
	public pro() {
		initialize();
	}

	/**
	 * Initialize the contents of the frame.
	 */
	private void initialize() {
		frame = new JFrame();
		frame.getContentPane().setBackground(new Color(0, 0, 0));
		frame.setBounds(100, 100, 720, 464);
		frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		frame.getContentPane().setLayout(null);
		
		JPanel panel = new JPanel();
		panel.setBorder(UIManager.getBorder("CheckBox.border"));
		panel.setBackground(new Color(255, 255, 255));
		panel.setBounds(360, 0, 360, 458);
		frame.getContentPane().add(panel);
		panel.setLayout(null);
		
		JLabel lblNewLabel = new JLabel("Name");
		lblNewLabel.setHorizontalAlignment(SwingConstants.CENTER);
		lblNewLabel.setForeground(new Color(255, 0, 0));
		lblNewLabel.setFont(new Font("Lucida Grande", Font.PLAIN, 21));
		lblNewLabel.setBounds(60, 78, 67, 30);
		panel.add(lblNewLabel);
		
		JLabel lblPassword = new JLabel("Password");
		lblPassword.setHorizontalAlignment(SwingConstants.CENTER);
		lblPassword.setForeground(Color.RED);
		lblPassword.setFont(new Font("Lucida Grande", Font.PLAIN, 21));
		lblPassword.setBounds(60, 174, 111, 30);
		panel.add(lblPassword);
		
		textField_5 = new JTextField();
		textField_5.setBounds(56, 120, 248, 42);
		panel.add(textField_5);
		textField_5.setColumns(10);
		
		textField_6 = new JTextField();
		textField_6.setColumns(10);
		textField_6.setBounds(56, 216, 248, 42);
		panel.add(textField_6);
		
		JButton btnNewButton = new JButton("LOGIN");
		btnNewButton.setForeground(new Color(70, 130, 180));
		btnNewButton.setFont(new Font("Lucida Grande", Font.PLAIN, 20));
		btnNewButton.setBounds(74, 293, 211, 62);
		panel.add(btnNewButton);
		
		JButton btnNewButton_1 = new JButton("Forgot Password?");
		btnNewButton_1.setFont(new Font("Lucida Grande", Font.PLAIN, 10));
		btnNewButton_1.setBounds(180, 362, 116, 30);
		panel.add(btnNewButton_1);
		
		JButton btnNewButton_1_1 = new JButton("New User");
		btnNewButton_1_1.setFont(new Font("Lucida Grande", Font.PLAIN, 11));
		btnNewButton_1_1.setBounds(70, 365, 111, 25);
		panel.add(btnNewButton_1_1);
		
		JPanel panel_1 = new JPanel();
		panel_1.setBackground(Color.DARK_GRAY);
		panel_1.setBounds(0, 0, 359, 458);
		frame.getContentPane().add(panel_1);
		panel_1.setLayout(null);
		
		JLabel lblNewLabel_1 = new JLabel("Sign In");
		lblNewLabel_1.setHorizontalAlignment(SwingConstants.CENTER);
		lblNewLabel_1.setForeground(Color.WHITE);
		lblNewLabel_1.setFont(new Font("Microsoft Sans Serif", Font.BOLD, 40));
		lblNewLabel_1.setBounds(51, 147, 256, 46);
		panel_1.add(lblNewLabel_1);
		
		JRadioButton rdbtnCustomer = new JRadioButton("Customer");
		rdbtnCustomer.setBounds(45, 225, 141, 23);
		panel_1.add(rdbtnCustomer);
		rdbtnCustomer.setForeground(Color.LIGHT_GRAY);
		rdbtnCustomer.setHorizontalAlignment(SwingConstants.CENTER);
		rdbtnCustomer.setFont(new Font("Lucida Grande", Font.PLAIN, 16));
		
		JRadioButton rdbtnNewRadioButton = new JRadioButton("Admin");
		rdbtnNewRadioButton.setBounds(173, 225, 141, 23);
		panel_1.add(rdbtnNewRadioButton);
		rdbtnNewRadioButton.setForeground(Color.LIGHT_GRAY);
		rdbtnNewRadioButton.setFont(new Font("Lucida Grande", Font.PLAIN, 16));
		rdbtnNewRadioButton.setHorizontalAlignment(SwingConstants.CENTER);
		
		
	}
}
