package com.company;

import java.util.HashMap;
import java.util.Locale;
import java.util.Scanner;
import java.util.TreeMap;

public class Sums_by_Town_07 {
    public static void main(String[] args) {
        Scanner scan = new Scanner(System.in).useLocale(Locale.ENGLISH);
        int n = Integer.parseInt(scan.nextLine());
        TreeMap<String, Double> towns = new TreeMap<>();
        for (int i = 0; i < n; i++) {
            String[] line = scan.nextLine().split(" \\| ");
            String town = line[0].trim();
            double income = Double.parseDouble(line[1].trim());

            if (towns.containsKey(town)) {
                towns.put(town, towns.get(town) + income);
            }
            else {
                towns.put(town, income);
            }
        }
        for (String key : towns.keySet()) {
            System.out.println(key + " -> " + towns.get(key));
        }
    }
}
