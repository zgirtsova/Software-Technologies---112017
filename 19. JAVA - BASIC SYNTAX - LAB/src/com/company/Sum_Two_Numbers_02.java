package com.company;

import java.util.Locale;
import java.util.Scanner;

public class Sum_Two_Numbers_02 {
    public static void main(String[] args) {
        Scanner scan = new Scanner(System.in).useLocale(Locale.ENGLISH);;

        double num1 = scan.nextDouble();
        double num2 = scan.nextDouble();

        System.out.println(num1 + num2);
    }
}
