import java.io.*;
import java.sql.*;
import javax.sql.*;

class oracledemo
{
	public static void main(String args[])
	{
		try
		{
			Class.forName("oracle.jdbc.driver.OracleDriver");
			Connection conn=DriverManager.getConnection("jdbc:oracle:thin:@localhost:1521:xe","system","system");
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