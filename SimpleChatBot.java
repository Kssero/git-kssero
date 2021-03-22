package simple;

import java.awt.*;
import java.awt.event.*;
import javax.swing.*;


class SimpleChatBot extends JFrame implements ActionListener {
    final String TITLE_OF_PROGRAM = "Chatter: simple chatbot";
    final int START_LOCATION = 200;
    final int WINDOW_WIDTH = 350;
    final int WINDOW_HEIGHT = 650;

    JTextArea dialogue;
    JCheckBox ai;
    JTextField message;
    SimpleBot sbot;


    public static void main(String[] args) {

        new SimpleChatBot();
    }

    SimpleChatBot() {
        setTitle(TITLE_OF_PROGRAM);
        setDefaultCloseOperation(EXIT_ON_CLOSE);
        setBounds(START_LOCATION, START_LOCATION, WINDOW_WIDTH, WINDOW_HEIGHT);


        dialogue = new JTextArea();
        dialogue.setLineWrap(false);
        JScrollPane scrollbar = new JScrollPane(dialogue);

        add(BorderLayout.CENTER, scrollbar);
        JPanel bp = new JPanel();
        bp.setLayout(new BoxLayout(bp, BoxLayout.X_AXIS));
        ai = new JCheckBox("AI");
        message = new JTextField();
        //ai.doClick();
        JButton enter = new JButton("ENTER");
        message.addActionListener(this);
        enter.addActionListener(this);

        bp.add(ai);
        bp.add(message);
        bp.add(enter);
        add(BorderLayout.SOUTH, bp);
        setVisible(true);
         sbot = new SimpleBot();
    }

    @Override
    public void actionPerformed(ActionEvent event) {
        if (message.getText().trim().length() > 0) {

            dialogue.append(message.getText() + "\n");
            dialogue.append(TITLE_OF_PROGRAM.substring(0,9) + sbot.sayInReturn(message.getText(), ai.isSelected()) + "\n");
            message.setText("");
            message.requestFocusInWindow();
        }
    }


}


