package com.company;

import java.util.Locale;
import java.util.Scanner;

public class Sum_N_Integers_04 {
    public static void main(String[] args) {
    Scanner scan = new Scanner(System.in).useLocale(Locale.ENGLISH);
    int n = scan.nextInt();
    int sum = 0;
        for (int i = 0; i < n; i++) {
            sum += scan.nextInt();
        }
        System.out.println("Sum = " + sum);

    }
}
