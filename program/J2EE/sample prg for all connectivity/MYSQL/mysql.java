import java.io.*;
import java.sql.*;
import javax.sql.*;
class mysql
{
	public static void main(String args[])
	{
		try
		{
			Class.forName("com.mysql.jdbc.Driver");
			Connection conn=DriverManager.getConnection("jdbc:mysql://localhost:3306/stud","root","");
			Statement stmt=conn.createStatement();
			ResultSet rs;
			rs=stmt.executeQuery("select * from studinfo");
			while(rs.next())
			{
				System.out.println(" "+rs.getInt("rollno"));
				System.out.println(rs.getString("sname"));
				System.out.println(rs.getString("city"));
			
			}
		}
		catch(Exception e)
		{
			System.out.println(" "+e);
		}
		
	}
}