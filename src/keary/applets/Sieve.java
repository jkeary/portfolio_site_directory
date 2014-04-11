//Xenakis Sieve java object by Alan Johnson and James Keary.  Creates a sieve that modulates around a cycle of elements.

package keary.applets;

import com.softsynth.jmsl.JMSLRandom;

public class Sieve {

	// create an array of boolean values
	public boolean[] isMember;

	public Sieve(int length) {
		isMember = new boolean[length];
		for (int i = 0; i < length; i++) {
			isMember[i] = true;
		}
	}

	// finds length of your array
	public int length() {
		return isMember.length;
	}

	// counts the number of members of your array.  members being those elements of your sieve that are chosen.
	public int count() {
		int numMembers = 0;
		for (int i = 0; i < length(); i++) {
			if (isMember[i]) {
				numMembers++;
			}
		}
		return numMembers;
	}

	// negate method is used when only using the contents of 1 sieve.
	public void negate() {
		for (int i = 0; i < length(); i++) {
			isMember[i] = !isMember[i];
		}
	}
		
	// filter method is determining the starting pitch and the interval leaps around the modulus.
	public void filter(int start, int leap) {
		for (int i = 0; i < length(); i++) {
			isMember[i] = ((i % leap) == start);
		}
	}
	
	// chooseValue method to determine how values are chosen from the sieve.
	public int chooseValue() {
		int randNum = JMSLRandom.choose(0, count() - 1);
		int numMembers = 0;
		for (int i = 0; i < length(); i++) {
			if (isMember[i]) {
				numMembers++;
				if (randNum < numMembers) {
					return i;
				}
			}
		}
		return -1;
	}

	public String toString() {
		String elements = "";
		for (int i = 0; i < length(); i++) {
			if (isMember[i]) {
				elements += i + " ";
			}
		}
		return elements;
	}
	
	// union method is boolean operator to combine sieves.  Union means every element from both sieves is used
	public static Sieve union(Sieve a, Sieve b) {
		if (a.length() != b.length())
			return null;

		Sieve result = new Sieve(a.length());
		for (int i = 0; i < a.length(); i++) {
			result.isMember[i] = a.isMember[i] || b.isMember[i];
		}
		return result;

	}
	
	// intersect method is boolean operator to only use common elements from both sieves.
	public static Sieve intersect(Sieve a, Sieve b) {
		if (a.length() != b.length())
			return null;

		Sieve result = new Sieve(a.length());
		for (int i = 0; i < a.length(); i++) {
			result.isMember[i] = a.isMember[i] && b.isMember[i];
		}
		return result;
	}
	// minus method removes all of b's elements from a and return resulting Sieve
		public static Sieve minus(Sieve a, Sieve b) {
			if (a.length() != b.length())
				return null;

			Sieve result = new Sieve(a.length());
			for (int i = 0; i < a.length(); i++) {
				result.isMember[i] = a.isMember[i] && ! b.isMember[i];
			}
			return result;
		}
		
		// clone method
		public Sieve clone() {
			Sieve d = new Sieve(length());
		
			for(int i = 0; i < length(); i++) {
				d.isMember[i] = isMember[i]; 
			}
			return d;
		}
}
