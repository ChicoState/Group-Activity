import React, {useState} from 'react';
import {Text,View, TouchableOpacity, SafeAreaView} from 'react-native';
import {Agenda} from 'react-native-calendars';
import {Surface, Card } from 'react-native-paper';
import { UserIcon,Bars3Icon } from "react-native-heroicons/outline";
import { StyleSheet } from 'react-native';

const timeToString = (time) => {
    const date = new Date(time);
    return date.toISOString().split('T')[0];
  };
  
  const HomeScreen = () => {
    const [items, setItems] = useState({});
  
    const loadItems = (day) => {
      setTimeout(() => {
        for (let i = -15; i < 85; i++) {
          const time = day.timestamp + i * 24 * 60 * 60 * 1000;
          const strTime = timeToString(time);
          if (!items[strTime]) {
            items[strTime] = [];
            const numItems = Math.floor(Math.random() * 3 + 1);
            for (let j = 0; j < numItems; j++) {
              items[strTime].push({
                //name: 'Item for ' + strTime + ' #' + j,
                name: 'random event',
                height: Math.max(50, Math.floor(Math.random() * 150)),
              });
            }
          }
        }
        const newItems = {};
        Object.keys(items).forEach((key) => {
          newItems[key] = items[key];
        });
        setItems(newItems);
      }, 1000);
    };
  
    const renderItem = (item) => {
      return (
        <TouchableOpacity style={{marginRight: 10, marginTop: 17}}>
          <Card>
            <Card.Content>
              <View
                style={{
                  flexDirection: 'row',
                  justifyContent: 'space-between',
                  alignItems: 'center',
                }}>
                <Text>{item.name}</Text>
              </View>
            </Card.Content>
          </Card>
        </TouchableOpacity>
      );
    };
  
    return (
    <SafeAreaView style={{flex:2}}>
      <Surface style={styles.header}>
        
        <TouchableOpacity>
          <SafeAreaView style={styles.left}>
            <Bars3Icon color="#00CCBB"/>
          </SafeAreaView>
        </TouchableOpacity>
        
        <TouchableOpacity>
          <SafeAreaView style={styles.right}>
            <UserIcon size={25} color = "#00CCBB"/>
          </SafeAreaView>
        </TouchableOpacity>
      
      </Surface>
        <Agenda
          items={items}
          loadItemsForMonth={loadItems}
          selected={new Date().toLocaleString()}
          renderItem={renderItem}
        />
    </SafeAreaView>
    );
  };

  const styles = StyleSheet.create({
    header: {
      height: 20,
      elevation: 5,
      justifyContent: 'space-between',
      alignItems: 'center',
      flexDirection:'row',
      backgroundColor:'white'
    },
    left:{
      marginLeft:3,
      marginTop:7,
      height: 30,
      elevation: 4,
      alignItems:'left',
      flexDirection:'row',
    },
    right:{
      marginRight:3,
      marginTop:8,
      height: 30,
      elevation: 4,
      alignItems:'right',
      flexDirection:'row',
    }
  })
  
  export default HomeScreen;