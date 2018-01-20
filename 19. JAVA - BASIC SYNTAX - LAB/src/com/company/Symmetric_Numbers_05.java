package com.company;

import java.util.Locale;
import java.util.Scanner;

public class Symmetric_Numbers_05 {
    public static void main(String[] args) {
        Scanner scan = new Scanner(System.in).useLocale(Locale.ENGLISH);
        int n = scan.nextInt();

        for (int i = 1; i <= n; i++) {
            String number = i + "";
            if (isSymmetrical(number)) {
                System.out.print(number + " ");
            };
        }
    }
    public static boolean isSymmetrical(String inputText)
    {
        if(inputText.length() == 0 || inputText.length() ==1)
            return true;

        if(inputText.charAt(0) == inputText.charAt(inputText.length()-1))
            return isSymmetrical(inputText.substring(1,inputText.length()-1));

        return false;
    }
}
